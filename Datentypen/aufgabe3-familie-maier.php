<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php

// Beispiel einer einfachen Klasse
class Auto {
    public $marke;
    public $modell;
    public $baujahr;
    public $farbe;
    public $ps;

    public function __construct($marke, $modell, $baujahr, $farbe, $ps) {
        $this->marke = $marke;
        $this->modell = $modell;
        $this->baujahr = $baujahr;
        $this->farbe = $farbe;
        $this->ps = $ps;
    }

    public function ausgeben() {
        echo "Auto: $this->marke $this->modell, BJ: $this->baujahr, Farbe: $this->farbe, PS:$this->ps";
    }
}

// Erstellen eines Objekts
//$meinAuto = new Auto("Tesla", "Model S");
//$meinAuto->ausgeben();  // Ausgabe: Auto: Tesla Model S
$maier = [
        "Vater Alfred" => [ new Auto("Audi","A4","2023","schwarz","180")],
        "Mutter Ingrid" => [ new Auto("VW","Käfer","2019","gelb","110")],
        "Tochter Lisa" => [ new Auto("VW","up!","2025","rot","90")]
];
echo "<pre>";
//print_r($maier);
echo "</pre>";
echo "<hr>";
//foreach ($maier as $mitglied => $fahrzeug){
//    echo "<ul><li>$mitglied</li><ul>";
//    echo "<li>$fahrzeug->ausgeben()</li>";
//    }
//    echo "</ul></ul>";
//}
//echo "<hr>";

$maier["Vater Alfred2"] = [ new Auto("Porsche","unbekannt","2025","weiß","460")];
//foreach ($maier as $mitglied => $fahrzeug){
//    echo "<ul><li>$mitglied</li><ul>";
//    foreach ($fahrzeug as $key => $value){
//        echo "<li>$key : $value</li>";
//    }
//    echo "</ul></ul>";
//}
?>


</body>
</html>