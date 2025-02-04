<?php
class Student {
    private $nom;
    private $prenom;
    private $numEtu;
    private $credits;
    private $level;

    public function __construct($prenom, $nom, $numEtu) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numEtu = $numEtu;
        $this->credits = 0;
        $this->studentEval();
    }

    public function add_credits($credits) {
        if ($credits > 0) {
            $this->credits += $credits;
        }
        $this->studentEval();
    }

    public function get_credits() {
        return "Crédits de $this->prenom $this->nom : $this->credits<br>";
    }

    private function studentEval() {
        if ($this->credits >= 90) {
            $this->level = "Excellent";
        } else if ($this->credits >= 80) {
            $this->level = "Très Bien";
        } else if ($this->credits >= 70) {
            $this->level = "Bien";
        } else if ($this->credits >= 60) {
            $this->level = "Passable";
        } else {
            $this->level = "Insuffisant";
        }
    }

    public function studentInfo() {
        return "Prénom : $this->prenom<br>
        Nom: $this->nom<br>
        Numéro d'Etudiant : $this->numEtu<br>
        Niveau : $this->level<br>";
    }
}

$jd = new Student("John", "Doe", 145);
$jd->add_credits(25);
$jd->add_credits(30);
$jd->add_credits(5);
echo $jd->get_credits()."<BR>";
echo $jd->studentInfo();
