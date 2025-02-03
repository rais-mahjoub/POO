<?php
class Produit {
    public $nom;
    public $prixHT;
    public $TVA;

    public function __construct($nom, $prixHT, $TVA) {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }

    public function CalculerPrixTTC() {
        return 'Prix TTC : '. $this->prixHT+$this->prixHT*($this->TVA/100) . ' €<br>';
    }

    public function modifierNom($nom) {
        $this->nom = $nom;
    }

    public function modifierPrixHT($nom) {
        $this->prixHT = $nom;
    }

    public function modifierTVA($nom) {
        $this->TVA = $nom;
    }

    public function getNom() {
        return 'Nom : '. $this->nom . '<br>';
    }

    public function getPrixHT() {
        return 'Prix HT : ' . $this->prixHT . ' €<br>';
    }

    public function getTVA() {
        return 'TVA : ' . $this->TVA . ' %<br>';
    }

    public function afficherInfos() {
        return $this->getNom().$this->getPrixHT().$this->getTVA().$this->CalculerPrixTTC();
    }
}

$prod1 = new Produit('Café', 4.80, 10);
echo $prod1->getNom().'<br>';
$prod1-> modifierTVA (20);
$prod1 -> modifierNom('Kinder Délice');
echo $prod1->afficherInfos().'<br>';