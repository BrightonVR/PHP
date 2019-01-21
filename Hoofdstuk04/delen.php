<?php
/**
 * Created by PhpStorm.
 * User: brigh
 * Date: 16/01/2019
 * Time: 11:14
 */

function divide($number) {
    $var = $number / 3;
    $bool = is_int($var);

    if ($bool == 1) {
        return "True ";
    } else {
        return "False ";
    }

}

echo divide(6);
echo divide(8);
echo divide(1354);
echo divide(60);