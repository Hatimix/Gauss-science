<?php

class Language{
    public function __construct()
    {
        if (isset($_COOKIE['lang'])){
            require "App/" . $_COOKIE["lang"].".php";
        } else {
            header('location: Pages/Templates/selectLanguage.php');
        }

    }
}