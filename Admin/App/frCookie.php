<?php
if (empty($_COOKIE["lang"])) {
    setcookie('lang', 'fr', time() + (3600 * 24) * 2, '/', 'localhost');
    header("location: ../");
} else {
    header("location: ../");
}