<?php
/*Creare un array $matches che contiene dei sotto-array, i quali rappresentano delle partite di basket.
Ogni partita avrà le seguenti caratteristiche:
* squadra di casa
* squadra ospite
* punti fatti dalla squadra di casa
* punti fatti dalla squadra ospite
L'obbiettivo è stampare a schermo tutte le partite.
Ad esempio:
Olimpia Milano - Cantù | 55 - 60*/

$matches = [
    [
        'homeTeam' => 'Boston Celtics',
        'awayTeam' => 'Cleveland Cavaliers',
        'homeTeamScore' => 97,
        'awayTeamScore' => 110
    ],
    [
        'homeTeam' => 'Philadelphia 76ers',
        'awayTeam' => 'Miami Heat',
        'homeTeamScore' => 102,
        'awayTeamScore' => 110
    ],
    [
        'homeTeam' => 'Charlotte Hornets',
        'awayTeam' => 'Pacific	Golden State Warriors',
        'homeTeamScore' => 116,
        'awayTeamScore' => 106
    ],
    [
        'homeTeam' => 'Los Angeles Lakers',
        'awayTeam' => 'San Antonio Spurs',
        'homeTeamScore' => 112,
        'awayTeamScore' => 128
    ],
    'match5' => [
        'homeTeam' => 'Utah Jazz',
        'awayTeam' => 'Washington Wizards',
        'homeTeamScore' => 92,
        'awayTeamScore' => 114
    ]
];

// var_dump($matches);

for ($i=0; $i < count($matches); $i++) {
    echo ($matches[$i]["homeTeam"] . " " . "-" . " " . $matches[$i]["awayTeam"] . " | " . $matches[$i]["homeTeamScore"] . " " . "-" ." " . $matches[$i]["awayTeamScore"]) . "<br>";
}

?>
