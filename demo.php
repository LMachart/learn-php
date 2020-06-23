<?php

$eleves = [
    'cm2' => ['Jean', 'Marc', 'Louis'],
    'cm1' => [ 'Jeanne', 'Louise']
];

foreach ($eleves as  $classe => $listEleves) {
    echo "La classe $classe: \n";
    foreach ($listEleves as $eleve) {
        echo "- $eleve\n";
    }
    echo "\n";
}
