<?php

$action = (int) readline ('Entrez votre action  : ( 1: attaquer, 2: defendre, 3: passer mon tour)'  );

if ($action === 1){
    echo 'J\'attaque';
} elseif ($action === 2) {
    echo 'je defends';
} elseif ($action === 3){
    echo 'je ne fais rien';
} else {
    echo 'commande inconnu';
}








/*
switch ($action) {
    case 1:
        echo 'J\'attaque';
    break;

    case 2: 
        echo 'je defends';
    break;
    
    case 3: 
        echo 'je ne fais rien';
    break;

    default: 
    echo 'commande inconnu';
}*/
