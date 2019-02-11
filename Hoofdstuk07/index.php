<?php
/**
 * Created by PhpStorm.
 * User: brigh
 * Date: 11/02/2019
 * Time: 08:33
 */

session_start();
$users = array(
    "1" => array("pass" => "1", "rol" => "Admin"),
    "2" => array("pass" => "2", "rol" => "User"),
);
if(isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}
if (isset($_POST['knop'])
    && isset($users[$_POST["login"]])
    && $users[$_POST ["login"]] ["pass"] == $_POST['pass']) {
    $_SESSION["user"] = array("naam" => $_POST["login"],
                              "pass" => $users[$_POST["login"]] ['pass'] ,
                              "rol" => $users[$_POST["login"]] ['rol']);
    $message = "Welkom ".$_SESSION["user"]["naam"]." met de rol "
               .$_SESSION["user"]["rol"];
    } else {
    $message = "inloggen";
}
?>

<html>
<body>
<h1><?php echo $message; ?></h1>
<form action="index.php" method="post">
    <div class="form-group">
        <label for="login"> Login</label>
        <input type="text" name="login" value="">
    </div>
    <div class="form-group">
        <label for="pass">Password:</label>
        <input type="password" name="pass" value="">
    </div>
    <input type="submit" name="knop">
</form>
<a href="others.php">Website</a><br>
<a href="index.php?loguit">Uitloggen</a><br>
<a href="admin.php?loguit">Admin</a>
</body>
</html>