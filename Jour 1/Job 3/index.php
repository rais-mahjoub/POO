<?php
class Personne {
    public $nom;
    public $prenom;

    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function SePresenter() {
        echo"Je suis $this->prenom $this->nom<br>";
    }
}

$p1 = new Personne('Doe', 'John');
$p2 = new Personne('Dupont','Jean');
$p1->SePresenter();
$p2->SePresenter();