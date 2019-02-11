<?php
/**
 * Created by PhpStorm.
 * User: brigh
 * Date: 11/02/2019
 * Time: 08:39
 */

session_start();
if (isset($_SESSION["user"])) {
    echo "<h1>Welkom " . $_SESSION["user"]["naam"] . " op de website</h1>";
    echo "<p><a href = 'index.php'>home page</a>";
} else {
    header('location: index.php');
}