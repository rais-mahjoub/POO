<?php
class Animal {
    public $prenom;
    public $age;
    public function __construct() {
        $this->prenom = null;
        $this->age = 0;
    }

    public function nommer($prenom) {
        $this->prenom = $prenom;
        echo "L'animal se nomme $this->prenom<br>";
    }

    public function vieillir() {
        $this->age++;
        echo "L'animal a $this->age ans<br>";
    }

}

$animal = new Animal();
$animal->nommer("Luna");
$animal->vieillir();
$animal->vieillir();