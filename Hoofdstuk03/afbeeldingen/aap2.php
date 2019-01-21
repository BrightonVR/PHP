<?php
/**
 * Created by PhpStorm.
 * User: brigh
 * Date: 15/01/2019
 * Time: 09:02
 */


for ($i = 0; $i < 9; $i++) {
    if ($i %2 == 0) {
        $class = "class='rood'";
    } else {
        $class = "class='groen'";
    }
    echo "<img " . $class . "src = '../img/aap" . ($i + 1) . ".jpg'>";
}

?>

<style>
    *{
        text-align: center;
    }
    .rood {
        border: red solid 5px;
    }
    .groen{
        border: green solid 5px;
    }
</style>


