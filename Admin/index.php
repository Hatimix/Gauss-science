<?php
require 'App/Autoloader.php';
Autoloader::register();
new Language();
$db = new Database();

$page = isset($_GET['p']) ? $_GET['p'] : 'home';
ob_start();
if (file_exists("Pages/$page.php")){
    require "Pages/$page.php";
} else {
    require "Pages/Home.php";
}
$content = ob_get_clean();
require 'Pages/Templates/Default.php';
