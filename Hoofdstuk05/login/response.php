<?php
/**
 * Created by PhpStorm.
 * User: brigh
 * Date: 21/01/2019
 * Time: 10:54
 */

if ($_POST['voornaam'] == "") {
    echo "Je moet nog een naam invullen ";
    echo "<a href=\"formulier.html\">Terug naar het formulier</a>";
} //else {
    //echo "Voornaam: ". $_POST['voornaam'];
//};

echo "<br>";

if ($_POST['adres'] == "") {
    echo "Je moet nog een adres invullen ";
    echo "<a href=\"formulier.html\">Terug naar het formulier</a>";
} //else {
    //echo "Adres: ". $_POST['adres'];
//};

echo "<br>";

if ($_POST['email'] == "") {
    echo "Je moet nog een email invullen ";
    echo "<a href=\"formulier.html\">Terug naar het formulier</a>";
} //else {
    //echo "Email: ". $_POST['email'];
//};

echo "<br>";

if ($_POST['wachtwoord'] == "") {
    echo "Je moet nog een wachtwoord invullen ";
    echo "<a href=\"formulier.html\">Terug naar het formulier</a>";
};