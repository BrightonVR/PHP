<?php
/**
 * Created by PhpStorm.
 * User: brigh
 * Date: 11/02/2019
 * Time: 08:35
 */

session_start();
if (isset($_SESSION["user"]) && $_SESSION["user"]["rol"] == "Admin") {
    echo "<h1>Welkom " . $_SESSION["user"] . " als administrator op deze website";
    echo "<p><a href = 'index.php'>home page</a></p>";
} else {
    header('location: index.php');
}