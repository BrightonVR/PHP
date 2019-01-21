<?php
/**
 * Created by PhpStorm.
 * User: brigh
 * Date: 11/01/2019
 * Time: 10:07
 */


$leeftijd = [10, 2, 65, 12];
$kosten = 10;


for ($i = 0; $i < 4; $i++) {
    if ($leeftijd[$i] > 65) {
        echo $leeftijd[$i] . " = " . ($kosten / 2) . " euro"."<br/>";
    } elseif ($leeftijd[$i] < 3) {
        echo $leeftijd[$i] . " = " . "0 euro"."<br/>";
    } elseif ($leeftijd[$i] <= 12) {
        echo $leeftijd[$i] . " = " . ($kosten / 2) . " euro"."<br/>";
    } else {
        echo $leeftijd[$i] . " = " . $kosten . " euro"."<br/>";
    }

}


