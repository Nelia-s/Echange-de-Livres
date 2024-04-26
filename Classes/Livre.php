<?php

namespace Classes;

use ErrorException;
use Interfaces\ILivre as InterfacesILivre;

class Livre implements InterfacesILivre
{
    public string $titre;
    public string $auteur;
    public string $editeur;
    public string $synopsis;

    function __construct($_titre, $_auteur, $_editeur, $_synopsis)
    {
        $this->titre = $_titre;
        $this->auteur = $_auteur;
        $this->editeur = $_editeur;
        $this->synopsis = $_synopsis;
    }

    // Un futur affichage
    function getTitre(): string
    {
        return $this->titre;
    }

    function getAuteur(): string
    {
        return $this->auteur;
    }

    function getEditeur(): string
    {
        return $this->editeur;
    }
}

try {
    $lv = new Livre("Ma vie la tragédie", "Helene", "Greta", "Helene n'a aucun gout.");
    echo $lv;
} catch (ErrorException $e) {
    echo "Exception found, send Help", $e->getMessage(), "\n";
}
