<?php
/**
 * Created by PhpStorm.
 * User: brigh
 * Date: 21/01/2019
 * Time: 11:12
 */

//print_r($_POST);

//echo "<img src='img/".$_POST['apen'].".jpg'>";

foreach ($_POST['apen'] as $aap) {
    echo "<img src='img/".$aap.".jpg'>";
}