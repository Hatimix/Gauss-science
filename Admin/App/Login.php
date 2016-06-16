<?php
session_start();
require 'class/Database.php';
$db = new Database();
$errors = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    if (empty($_POST["username"])){
        $errors['username'] = "Your username field is empty, please try again !";
    } elseif (!preg_match("/^[a-zA-Z0-9]*$/",$_POST["username"])) {
        $errors['username'] = "Your username is not valid, please verify your entries and try again !";
        var_dump($errors['username']);
    }

    if (empty($_POST["password"])){
        $errors['password'] = "Your password field is empty, please try again !";
        var_dump($errors['password']);
    }

    if (empty($errors)){
        $username   =   $_POST['username'];
        $password   =   $_POST['password'];
        $res = $db->prepare("SELECT * FROM admin WHERE admin_login = ? AND admin_pass = ?",[$username,$password]);
        if ($res){
            $_SESSION["login"] = array(
                'login'     =>  $username,
                'password'  =>  $password
            );
            setcookie("userData", $username, time()+(3600*24)*2,'/','localhost');
            header("location: ../index.php");
        }
    }

} else {
    header("location: ../index.php");
}
