<?php
if (empty($_COOKIE["lang"])){
    setcookie('lang','en',time()+(3600*24)*2,'/','localhost');
    header("location: ../index.php");
} else {
    header("location: ../index.php");
}
