<?php
class Cercle {
    public $rayon;
    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function changerRayon($rayon) {
        $this->rayon = $rayon;
    }

    public function afficherInfos() {
        echo $this->circonference().$this->aire().$this->diametre()."<br>";
    }

    public function circonference() {
        return "Circonférence : " . 2*pi()*$this->rayon . "<br>";
    }

    public function aire() {
        return "Aire : " . pi()*$this->rayon**2 . "<br>";
    }

    public function diametre() {
        return "Diamètre : " . $this->rayon*2 . "<br>";
    }
}

$cercle1 = new Cercle(4);
$cercle2 = new Cercle(7);

$cercle1->afficherInfos();
$cercle2->afficherInfos();