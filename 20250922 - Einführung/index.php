<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Hallo</title>
</head>
<body>

<?php
//for ($i = 0; $i < 5; $i++) {
//    echo "<h2>Überschrift ".($i+1)."</h2>";
//}
//
//// Verschiedene Variablennamen
//$minion;
//$Alter;
//$_debugging;
//$MAXIMALER_BETRAG;
//
//// Verschiedene Datentypen als Wert
//$tmp = "Nissan";   // String
//$tmp = 100;        // Integer
//$tmp = [1 , "Zwei", 3]; // Array
//
//// Prüfung auf nicht initialisierte Variable
//if (!isset($nichtinitialisierteVariable)) {
//    echo "Die Variable ist nicht gesetzt oder hat den Wert NULL!\n\n";
//}
//
//function incrementCounter() {
//    global $counter; //nur mit diesem Zusatz wird die Variabl global
//    $counter++;   // Lokale Variable wird inkrementiert, ohne Zusatz oben nur lokal
//}
//
//$counter = 10;
//incrementCounter();
//
//echo $counter;    // Ausgabe: 10 (lokale $counter existiert nicht außerhalb der Funktion)


$a = 42;
$b = "Hallo Welt!";
$c = [1, 2, "drei"];

echo "<pre>";
var_dump($a);
echo "</pre>";
echo "<pre>";
print_r($a);
echo "</pre>";
echo "<pre>";
// Ausgabe: int(42)

var_dump($b);
echo "</pre>";
echo "<pre>";
print_r($b);
echo "</pre>";
echo "<pre>";
// Ausgabe: string(11) "Hallo Welt!"

var_dump($c);
echo "</pre>";
echo "<pre>";
print_r($c);
echo "</pre>";

// Ausgabe:
// array(3) {
//   [0]=> int(1)
//   [1]=> int(2)
//   [2]=> string(4) "drei"
// }


?>

</body>
</html>