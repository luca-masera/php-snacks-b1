<?php
$games = [
    [
        "teamHome" => "Lakers",
        "teamOut" => "Clippers",
        "homeScore" => 89,
        "outScore" => 87,
    ],
    [
        "teamHome" => "Suns",
        "teamOut" => "Denver",
        "homeScore" => 90,
        "outScore" => 110,
    ],
    [
        "teamHome" => "Boston",
        "teamOut" => "Pistons",
        "homeScore" => 99,
        "outScore" => 88,
    ],
    [
        "teamHome" => "Bulls",
        "teamOut" => "Rockets",
        "homeScore" => 118,
        "outScore" => 95,
    ],
    [
        "teamHome" => "Golden State",
        "teamOut" => "Timberwolves",
        "homeScore" => 110,
        "outScore" => 111,
    ],
    [
        "teamHome" => "Cavaliers",
        "teamOut" => "Wizard",
        "homeScore" => 99,
        "outScore" => 92,
    ]
]
    ?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--SNACK 1-->

    <?php

    foreach ($games as $game) {
        echo "<div>" . $game["teamHome"] . ' - ' . $game["teamOut"] . ' | ' . $game["homeScore"] . ' - ' . $game["outScore"] . "</div>";
    }
    ?>

</body>

</html>