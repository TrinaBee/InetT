<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<?php
$maier = [
        "Vater Alfred" => [
                "Marke" => "Audi",
                "Typ" => "A4",
                "Baujahr" => "2023",
                "Farbe" => "schwarz",
                "PS" => "180"
        ],
        "Mutter Ingrid" => [
                "Marke" => "VW",
                "Typ" => "Käfer",
                "Baujahr" => "2019",
                "Farbe" => "gelb",
                "PS" => "110"
        ],
        "Tochter Lisa" => [
                "Marke" => "VW",
                "Typ" => "up!",
                "Baujahr" => "2025",
                "Farbe" => "rot",
                "PS" => "90"
        ]
];
echo "<pre>";
print_r($maier);
echo "</pre>";
echo "<hr>";
foreach ($maier as $mitglied => $fahrzeug){
    echo "<ul><li>$mitglied</li><ul>";
    foreach ($fahrzeug as $key => $value){
        echo "<li>$key : $value</li>";
    }
    echo "</ul></ul>";
}
echo "<hr>";

$maier["Vater Alfred2"] = [
        "Marke" => "Porsche",
        "Typ" => "unbekannt",
        "Baujahr" => "2025",
        "Farbe" => "weiß",
        "PS" => "460"
];
foreach ($maier as $mitglied => $fahrzeug){
    echo "<ul><li>$mitglied</li><ul>";
    foreach ($fahrzeug as $key => $value){
        echo "<li>$key : $value</li>";
    }
    echo "</ul></ul>";
}
?>


</body>
</html>