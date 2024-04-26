<?php

namespace Classes;

use Classes\Utilisateur;

class Bibliotheque extends Utilisateur
{
    private $bibli = array();
    // Créer une bibliotheque
    // function CreerBibli(){
    //     return $this->bibli;
    // }

    // Ajouter des livres à la biblioteque de l'utilisatteur
    function Ajouter(Livre $obj)
    {
        array_push($this->bibli, $obj);
    }

    static function afficher_Bibliotheque($array) {
        if ($array == null){
            echo "La bibliotheque est vide.";
        }
        foreach ($array as $i) {
            echo $i . "<br>";
        }
        return 1;
    }
}
