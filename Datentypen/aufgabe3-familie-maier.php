<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fuhrpark Familie Maier</title>
</head>
<body>

<?php

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
        return "Auto: $this->marke $this->modell, BJ: $this->baujahr, Farbe: $this->farbe, PS:$this->ps";
    }
}


$maier = [
        "Vater Alfred" => [["Audi","A4","2023","schwarz","180"]],
        "Mutter Ingrid" => [["VW","Käfer","2019","gelb","110"]],
        "Tochter Lisa" => [ ["VW","up!","2025","rot","90"]]
];
echo "<pre>";
//print_r($maier);
echo "</pre>";
echo "<hr>";
foreach ($maier as $mitglied => $flotte){
    echo "<ul><li>$mitglied</li><ul>";
    foreach($flotte as $fahrzeug){
    list($marke,$modell,$baujahr,$farbe,$ps) = $fahrzeug;
    $neues_auto = new Auto($marke,$modell,$baujahr,$farbe,$ps);

    echo "<li>" . $neues_auto->ausgeben() . "</li>";
    }
    echo "</ul></ul>";
}
echo "<hr>";

array_push($maier["Vater Alfred"], ["Porsche","unbekannt","2025","weiß","460"]);

echo "<pre>";
//print_r($maier);
echo "</pre>";
echo "<hr>";

foreach ($maier as $mitglied => $flotte){
    echo "<ul><li>$mitglied</li><ul>";
    foreach($flotte as $fahrzeug){
        list($marke,$modell,$baujahr,$farbe,$ps) = $fahrzeug;
        $neues_auto = new Auto($marke,$modell,$baujahr,$farbe,$ps);

        echo "<li>" . $neues_auto->ausgeben() . "</li>";
    }
    echo "</ul></ul>";
}
echo "<hr>";
?>


</body>
</html>