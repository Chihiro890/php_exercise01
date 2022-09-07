<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス'
];

// ここに処理を記述

foreach ($foods as $meal => $food) {
    echo $meal . ' に ' . $food  . PHP_EOL;
}
echo 'を食べます' . PHP_EOL;
