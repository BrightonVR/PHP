<?php
/**
 * Created by PhpStorm.
 * User: brigh
 * Date: 30/01/2019
 * Time: 13:14
 */

$user = "schooluser";
$pass = "uA83psaD";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=school;port=8889', $user, $pass);
    foreach($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}