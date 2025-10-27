<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
echo('Aufgabe 1');
echo("<br><br>");
echo "Benutzer IP: " . $_SERVER['REMOTE_ADDR'];
echo("<br>");
echo "angefragte URL: " . $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
echo("<br>");
echo "REQUEST Methode: " . $_SERVER['REQUEST_METHOD'];
echo("<br>");
if (isset($_GET['username']))
    echo "Username:" . htmlspecialchars($_GET['name']);
else echo("Username: Kein Benutzername übergeben!");
echo("<br><br>");

echo('Aufgabe 2');
echo("<br><br>");
$abfrage = $_SERVER['HTTP_SEC_CH_UA'];

if (str_contains($abfrage, "Google Chrome")) {
    echo('Google Chrome');
}
if (str_contains($abfrage, "Firefox")) {
    echo('Firefox');
}
if (str_contains($abfrage, "Edge")) {
    echo('Edge');
}


?>


</body>
</html>