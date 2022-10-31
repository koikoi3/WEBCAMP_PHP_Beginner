<?php

$color = [
    "color1" => "Red",
    "color2" => "Yellow",
    "color3" => "Green",
    "color4" => "Blue",
    "color5" => "Black",
];

foreach($color as $k => $v) {
    echo "{$k} -> {$v} \n";
}

echo "\n";
foreach($color as $value) {
    echo "{$value} \n";
}

$key = [
    "Red" => '#ff0000',
    "Yellow" => '#ffff00',
    "Green" => '#00ff00',
    "Blue" => '#0000ff',
    "Black" => '#000000',
];

foreach($key as $k => $valu) {
    echo "{$k} -> {$valu} \n";
}