<?php

namespace Classes;

use ErrorException;
use Exception;
use IUtilisateur;

class Utilisateur implements IUtilisateur
{
    //Informations generales sur l'utilisateur
    public string $nom;
    public int $age;
    public string $email;

    //Construire un UT1 et UT2
    function __construct($_nom, $_age, $_email)
    {
        $this->nom = $_nom;
        $this->age = $_age;
        $this->email = $_email;
    }

    function getNom(): string
    {
        return $this->nom;
    }

    function getAge(): int
    {
        return $this->age;
    }

    function getEmail(): string
    {
        return $this->email;
    }
}

try {
    $ut = new Utilisateur("Nelson", "55", 54);
    echo $ut;
} catch (ErrorException $e) {
    echo "Exception found, send Help", $e->getMessage(), "\n";
}