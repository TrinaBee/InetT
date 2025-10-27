<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aufgabe 1 - Generierung von HTML-Code</title>
</head>
<body>

<?php
//hoehe muss ungrade sein
$hoehe = 9;

$mitte = ($hoehe + 1) / 2;

for ($i = 1; $i <= $hoehe; $i++) {
    if ($i <= $mitte) {
        $anzahl = $i;
    } else {
        $anzahl = $hoehe - $i + 1;
    }
    if ($i % 2 == 0) {
        $farbe = "red";
    } else {
        $farbe = "black";
    }
    for ($j = 1; $j <= $anzahl; $j++) {
        echo "<span style='color:$farbe'>O</span>";
    }
    echo "<br>";
}

echo "<hr>";

for ($k = 1; $k <= $hoehe; $k++) {
    if ($k <= $mitte) {
        $anzahl = $k;
    } else {
        $anzahl = $hoehe - $k + 1;
    }

    if ($k % 2 == 0) {
        $farbe = "red";
    } else {
        $farbe = "black";
    }
    for ($l = 1; $l <= $anzahl; $l++) {
        echo "<span style='color:$farbe'>O</span>";
    }

    $leerzeichen = ($hoehe +2)-(2*$anzahl);

    for($m = 1; $m <=$leerzeichen;$m++){
        echo "<span style='color:white'>O</span>";
    }


    for ($l = 1; $l <= $anzahl; $l++) {
        echo "<span style='color:$farbe'>O</span>";
    }
    echo "<br>";
}

echo "<hr>";
?>


</body>
</html>