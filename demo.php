<?php

$action = (int) readline ('Entrez votre action  : ( 1: attaquer, 2: defendre, 3: passer mon tour)'  );

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
}