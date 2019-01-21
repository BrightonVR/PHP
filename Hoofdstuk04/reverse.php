<?php
/**
 * Created by PhpStorm.
 * User: brigh
 * Date: 16/01/2019
 * Time: 11:36
 */

function reverse($text) {
    $checkString = is_string($text);
    if ($checkString == 1) {
        return strrev($text);
    } else {
        return "Is not a String";
    }

}

echo reverse("Hello World!");