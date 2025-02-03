<?php

class Point {
    public $x;
    public $y;
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    public function afficherLesPoints() {
        echo"[$this->x ; $this->y]<br>";
    }

    public function afficherX() {
        echo "x = $this->x<br>";
    }
    public function afficherY() {
        echo "y = $this->y<br>";
    }

    public function changerX($x) {
        $this->x = $x;
    }

    
    public function changerY($y) {
        $this->y = $y;
    }
}

$point = new Point(9,15);
$point->afficherX();
$point->afficherY();
$point->afficherLesPoints();

$point->changerX(3);
$point->changerY(4);

$point->afficherX();
$point->afficherY();
$point->afficherLesPoints();