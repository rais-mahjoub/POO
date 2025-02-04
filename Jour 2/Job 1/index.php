<?php
class Rectangle {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    public function getLongueur() {
        return $this->longueur;
    }
    public function getLargeur() {
        return $this->largeur;
    }
}

$rectangle = new Rectangle(10,5);
echo $rectangle->getLongueur() . "<br>";
echo $rectangle->getLargeur() . "<br><br>";

$rectangle->setLongueur(8);
$rectangle->setLargeur(8);

echo $rectangle->getLongueur() . "<br>";
echo $rectangle->getLargeur() . "";