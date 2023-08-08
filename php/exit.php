<?php
    setcookie('user', $_COOKIE['user'], time() - 3600 * 24 * 7, "/annpoks");
    setcookie('role', $_COOKIE['role'], time() - 3600 * 24 * 7, "/annpoks");
    header('Location: /annpoks/index.php');
?>