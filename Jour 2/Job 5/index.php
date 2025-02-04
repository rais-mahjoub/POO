<?php
class Voiture {
    private $marque;
    private $modele;
    private $annee;
    private $km;
    private $en_marche;
    private $reservoir;

    public function __construct($marque, $modele, $annee, $km) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->km = $km;
        $this->en_marche = false;
        $this->reservoir = 50;
    }

    public function demarrer() {
        if ($this->verifier_plein()>5) {
            $this->en_marche = true;
        }
    }

    public function verifier_plein() {
        return $this->reservoir;
    }

    public function arreter() {
        $this->en_marche = false;
    }

    public function getEn_marche() {
        if ($this->en_marche) {
            return "En marche";
        } else {
            return "&Agrave l'arr&ecirc;t";
        }
    }
}

$voiture = new Voiture("Renault", "Kangoo", "2004", "125000");
echo $voiture->getEn_marche()."<BR>";
$voiture->demarrer();
echo $voiture->getEn_marche()."<br>";
$voiture->arreter();
echo $voiture->getEn_marche()."<br>";