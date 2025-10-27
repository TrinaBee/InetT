<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php

if (isset($_POST['login'], $_POST['password'])) {
    $kennung = $_POST['login'];
    $passwort = $_POST['password'];
    echo("Nutzer $kennung wurde erfolgreich mit POST eingeloggt!");
}
if (isset($_GET['login'], $_GET['password'])) {
    $kennung = $_GET['login'];
    $passwort = $_GET['password'];
    echo("Nutzer $kennung wurde erfolgreich mit GET eingeloggt!");
}
else {
    echo "Bitte füllen Sie beide Felder aus.";?>
    <form method="GET">
        <input type="text" placeholder="Login" name="login"><br>
        <input type="password" placeholder="Passwort" name="password"><br>
        <input type="submit" value="Einloggen" name="submit">
    </form>
<?php
}
?>


</body>
</html>