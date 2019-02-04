<?php
/**
 * Created by PhpStorm.
 * User: brigh
 * Date: 04/02/2019
 * Time: 09:18
 */

$users = array(
    "piet@worldonline.nl" => "doetje123",
    "klaas@carpets.nl" => "snoepje777",
    "truushendriks@wegweg.nl" => "arkiearkie201",
);

if (isset($_POST['button'])
    && isset($users[$_POST["login"]])
    && $users[$_POST ["login"]] == $_POST['pass']) {
    $message = "Welkom!";
} else {
    $message = "Sorry, geen toegang!";
}

?>

<html>
<body>
<h1><?php echo $message; ?></h1>
<form action="formulier.php" method="post">
    <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" name="login" value="">
    </div>
    <div class="form-group">
        <label for="pass">Password:</label>
        <input type="password" name="pass" value="">
    </div>
    <input type="submit" name="button">
</form>
</body>
</html>