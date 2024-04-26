<?php
// $empty = $obj1;
// $obj1 = $obj2;
// $obj2 = $empty;

use Classes\Utilisateur;

class Transaction extends Utilisateur {

    // L'echange est sensé etre fait avec des indices
    function Echange($veutEchanger, $veutRecevoir){
        $empty = "";
        $empty = $veutEchanger;
        $veutEchanger = $veutRecevoir;
        $veutRecevoir = $empty;
        // Les deux sont inversé mais le contenu sera retourné aux indice respectifs
        return $veutEchanger and $veutRecevoir;
    }
} 
