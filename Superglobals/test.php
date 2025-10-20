<?php
session_start();

if (!isset($_SESSION['liste'])) {
    $_SESSION['liste'] = [];
}
$_SESSION['liste'][] = date('d/m/y H:i:s');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>

<?php
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo date('d/m/Y H:i:s',$_SERVER['REQUEST_TIME']);
echo "<hr>";

echo "<pre>";
print_r($_GET);
echo "</pre>";


echo "<hr>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<hr>";
echo "<pre>";
print_r($_ENV);
echo "</pre>";

?>


</body>
</html>