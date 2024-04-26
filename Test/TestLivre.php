<?php

use Classes\Bibliotheque;
use Classes\Utilisateur;
use Classes\Livre;

require('Load.php');

// Test Creation utilisateur
$ut1 = new Utilisateur("Pierre", 20, 'fhyez@jhbfe.com');
$ut2 = new Utilisateur("Patric", 45, 'efkjz@jhfze.com');

// Test Creation de Livre
$lv1 = new Livre("zae", "addd","fvez","ezfcefze");
$lv1->getTitre(); // Il a acces aux methodes de la classe Livre
$lv2 = new Livre("fezf", "fze","hsdd","febfyfkj");

// Test creation de bibliotheque numérique (grossomodo la liste des livres de chacun) et ajouter un livre
$bbt1 = new Bibliotheque("Pierre", 20, 'fhyez@jhbfe.com'); // Appartient a Pierre qui a 20 ans et a comme mail 'fhyez@jhbfe.com'
$bbt2 = new Bibliotheque("Patric", 45, 'efkjz@jhfze.com');
echo $bbt1->Ajouter($lv1);
$bbt2->Ajouter($lv2);

$echange = new Transaction("Patricia", 14, 'dja@dna.fr');
$echange->Echange($lv1, $lv2);
