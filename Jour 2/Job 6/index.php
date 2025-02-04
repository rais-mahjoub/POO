<?php
class Commande {
    private $numero;
    private array $plats;
    private $statut;
    private $HT;
    private $TVA;
    private $TTC;
    private string $platsEcho;

    public function __construct($numero) {
        $this->numero = $numero;
        $this->plats = array();
        $this->statut = "En cours";
        $this->HT = 0;
        $this->TVA = 20;
        $this->TTC = 0;
        $this->platsEcho = "";
    }

    public function addPlat($nom, $prix) {
        $this->plats[]=$nom;
        $this->HT+= $prix/(1+$this->TVA/100);
        $this->TTC+= $prix;
    }

    private function getPlats() {
        for ($i = 0; $i < count($this->plats); $i++) {
            $this->platsEcho.=$this->plats[$i]."<br>";
        }
        return $this->platsEcho;
    }

    public function getCommande() {
        return "Commande numéro $this->numero :<br>
        Plats : ".$this->getPlats()."
        Prix HT : ".number_format($this->HT,2, ',', ' ')." €<br>
        TVA : $this->TVA %<br>
        Prix TTC : ".number_format($this->TTC,2, ',', ' ')." €<br><br>
        Statut de la commande : $this->statut";
    }
}

$cmd = new Commande(021);
$cmd->addPlat("Margherita",7.90);
$cmd->addPlat("Nuggets x20",9.90);
echo $cmd->getCommande();