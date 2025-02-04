<?php

class Livre {
    private $titre;
    private $auteur;
    private int $nbePages;

    public function __construct($titre, $auteur, $nbePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->nbePages = $nbePages;
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
            echo"Nombre invalide<br>";
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
echo $livre->getNbePages()."<br>";