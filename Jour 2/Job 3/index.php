<?php

class Livre {
    private $titre;
    private $auteur;
    private int $nbePages;
    private bool $dispo;

    public function __construct($titre, $auteur, $nbePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbePages = $nbePages;
        $this->dispo = true;
    }

    public function getTitre() {
        return $this->titre;
    }
    
    public function getAuteur() {
        return $this->auteur;
    }

    public function getNbePages() {
        return $this->nbePages;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    public function setNbePages($nbePages) {
        if (gettype($nbePages) == "integer") {
            $this->nbePages = $nbePages;
        } else {
            echo"Nombre invalide ($nbePages)<br>";
        }
    }

    public function verification() {
        if ($this->dispo) {
            return "Ce livre est disponible. <br>";
        } else {
            return "Ce livre n'est pas disponible. <br>";
        }
    }

    public function emprunter() {
        if ($this->dispo) {
            $this->dispo = false;
        } else {
            echo"Impossible d'emprunter un livre indisponible.<br>"; 
        }
    }

    public function rendre() {
        if (!$this->dispo) {
            $this->dispo = true;
        } else {
            echo "Vous ne pouvez pas rendre un livre que vous n'avez pas emprunter.<br>";
        }
    }
}

$livre = new Livre("Le livre de la jungle", "Mowgli", 271);
echo $livre->getTitre()."<BR>";
$livre->setAuteur("Michel Drucker");
echo $livre->getAuteur()."<br>";
echo $livre->getNbePages()."<br>";
$livre->setNbePages(331.5);
echo $livre->getNbePages()."<br>";
$livre->setNbePages(289);
echo $livre->getNbePages()."<br><br>";

echo $livre->verification();
$livre-> emprunter();
echo $livre->verification();
$livre-> rendre();
echo $livre->verification();
$livre->rendre();
echo $livre->verification();
$livre-> emprunter();
echo $livre->verification();
$livre-> emprunter();
echo $livre->verification();
$livre->rendre();
echo $livre->verification();