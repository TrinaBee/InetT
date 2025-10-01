<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Klasse 10A - Noten</title>
</head>
<body>

<?php
$gesamt = 0;
$klasse10A = [
        "Klasse" => "10A",
        "Schüler" => [
                [
                        "Name" => "Anna Müller",
                        "Noten" => [
                                "Mathematik" => 85,
                                "Englisch" => 78,
                                "Biologie" => 92
                        ]
                ],
                [
                        "Name" => "Ben Schmidt",
                        "Noten" => [
                                "Mathematik" => 67,
                                "Englisch" => 74,
                                "Biologie" => 80
                        ]
                ],
                [
                        "Name" => "Clara Weber",
                        "Noten" => [
                                "Mathematik" => 90,
                                "Englisch" => 88,
                                "Biologie" => 95
                        ]
                ],
                [
                        "Name" => "David Fischer",
                        "Noten" => [
                                "Mathematik" => 75,
                                "Englisch" => 82,
                                "Biologie" => 78
                        ]
                ],
                [
                        "Name" => "Eva Becker",
                        "Noten" => [
                                "Mathematik" => 88,
                                "Englisch" => 91,
                                "Biologie" => 85
                        ]
                ],
                [
                        "Name" => "Felix Wagner",
                        "Noten" => [
                                "Mathematik" => 72,
                                "Englisch" => 68,
                                "Biologie" => 74
                        ]
                ],
                [
                        "Name" => "Gina Hoffmann",
                        "Noten" => [
                                "Mathematik" => 95,
                                "Englisch" => 89,
                                "Biologie" => 93
                        ]
                ],
                [
                        "Name" => "Hans König",
                        "Noten" => [
                                "Mathematik" => 60,
                                "Englisch" => 70,
                                "Biologie" => 65
                        ]
                ],
                [
                        "Name" => "Isabel Braun",
                        "Noten" => [
                                "Mathematik" => 80,
                                "Englisch" => 85,
                                "Biologie" => 82
                        ]
                ],
                [
                        "Name" => "Jonas Keller",
                        "Noten" => [
                                "Mathematik" => 77,
                                "Englisch" => 73,
                                "Biologie" => 79
                        ]
                ],
                [
                        "Name" => "Klara Neumann",
                        "Noten" => [
                                "Mathematik" => 83,
                                "Englisch" => 87,
                                "Biologie" => 90
                        ]
                ]
        ]
];
foreach ($klasse10A["Schüler"] as $index => $blag){
    $noten = array_values($blag["Noten"]);
    $durchschnitt = array_sum($noten) / sizeof($noten);
    $klasse10A["Schüler"][$index]["durchschnitt"] = round($durchschnitt);
    $gesamt += round($durchschnitt);
}
$klasse10A["klassen_durchschnitt"] = round(($gesamt / sizeof($klasse10A["Schüler"])));

echo "<pre>";
print_r($klasse10A);
echo "</pre>";
?>


</body>
</html>