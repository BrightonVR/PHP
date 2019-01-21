<?php
/**
 * Created by PhpStorm.
 * User: brigh
 * Date: 16/01/2019
 * Time: 11:08
 */

function celTofar($celsius) {
    $fahrenheit = ($celsius * (9/5)) + 32;
    return $fahrenheit;
}

echo celTofar(0);