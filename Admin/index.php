<?php
session_start();
require 'App/Autoloader.php';
Autoloader::register();
new Language();
$db = new Database();

if (empty($_SESSION["login"])){
    $page = 'Login';
}else {
    $page = isset($_GET['p']) ? $_GET['p'] : 'home';
}
ob_start();
if (file_exists("Pages/$page.php")){
    require "Pages/$page.php";
} else {
    require "Pages/404.php";
}
$content = ob_get_clean();
require 'Pages/Templates/Default.php';