<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Einführung PHP</title>
</head>
<body>
<p>
<!--    Aus einem 0.0 wird ein-->
</p>
<?php
//    if ("0.0")
//        echo "true";
//    else
//        echo "false";
//$phrase = "   Hallo    ";
//echo strlen($phrase);
//echo $phrase;
//echo "<br>";
//
//$trimmed = trim($phrase);
//echo $trimmed;
//echo strlen($trimmed);

//
//// Erstellen
//$minions = ["Kevin", "Stuart", "Bob"];
//
//// Zugriff
//echo $minions[1];  // Ausgabe: Stuart
//echo"<br>";
//// Wert ändern
//$minions[2] = "Steve";
//echo $minions[2];  // Ausgabe: Steve
//echo"<br>";
//// Wert hinzufügen
//$minions[] = "Dave";  // Fügt "Dave" ans Ende des Arrays hinzu
//echo "<pre>";
//print_r($minions);
//echo"</pre>";
//
//echo"<br><br>";
//
//// Erstellen
//$farben = [
//    "rot" => "red",
//    "grün" => "green",
//    "blau" => "blue"
//];
//
//// Zugriff
//echo $farben["rot"];  // Ausgabe: red
//echo"<br>";
//// Wert ändern
//$farben["rot"] = "black";
//echo $farben["rot"];  // Ausgabe: black
//echo"<br>";
//// Wert hinzufügen
//$farben["gelb"] = "yellow";
//echo $farben["gelb"];
//echo "<br>";
//echo $farben["orange"];
//
//
//$tage = ['Montag', 'Dienstag', 'Mittwoch'];
//
//// Nur Werte ausgeben
//foreach ($tage as $value) {
//    echo "$value<br>";  // Ausgabe: Montag, Dienstag, Mittwoch
//}
//echo"<br>";
//// Schlüssel und Werte ausgeben
//foreach ($tage as $key => $value) {
//    echo "$key: $value<br>";  // Ausgabe: 0: Montag, 1: Dienstag, 2: Mittwoch
//}
//echo"<br>";
//for ($i = 0; $i < count($tage); $i++) {
//    echo "$i: $tage[$i]<br>";  // Ausgabe: 0: Montag, 1: Dienstag, 2: Mittwoch
//}

//-------------------------------------------------------------------------------------------------------
//$tiere = ["Hund","Katze","Maus","Bär","Vogel"];
//echo "<pre>";
//print_r($tiere);
//echo"</pre>";
//echo"<br><br>";
//
//$tiere[1] = "Elefant";
//echo "<pre>";
//print_r($tiere);
//echo"</pre>";
//echo"<br><br>";
//
//$tiere[] = "Wal";
//echo "<pre>";
//print_r($tiere);
//echo"</pre>";
//echo"<br><br>";
//
//for($i=0; $i < count($tiere); $i++){
//    echo "$i : $tiere[$i]<br>";
//}
//echo"<br><br>";
//foreach ($tiere as $tier){
//    echo "$tier<br>";
//}

//------------------------------------------------------------------------------------------------------------
$minions = [
    "Kevin" => "groß",
    "Stuart" => "Brille",
    "Bob" => "niedlich"
];
$minions["Kevin"] = "Raketen bauen";
$minions["Dave"] = "liebt Bananen";

foreach ($minions as $mini => $eigenschaft){
    echo "Minion $mini hat die Eigenschaft: $eigenschaft<br>";
}
echo "<br>";

foreach ($minions as $mini => $eigenschaft){
    if ($eigenschaft === "Raketen bauen"){
        echo "$mini ist bereit für den Raketenstart!<br>";
    }
//    else {
//        echo "Minion $key hat die Eigenschaft: $value<br>";
//    }
}
?>




</body>
</html>