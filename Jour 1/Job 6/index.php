<?php
class Personnage {
    public $x;
    public $y;
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function gauche() {
        $this->x --;
    }

    public function droite() {
        $this->x ++;
    }

    public function haut() {
        $this->y ++;
    }

    public function bas() {
        $this->y --;
    }

    public function position() {
        echo"[ $this->x ; $this->y ]<br>";
    }
}

$personnage = new Personnage(0,0);
$personnage->position();
$personnage->droite();
$personnage->position();
for ($i = 0; $i < 3; $i++) {
    $personnage->gauche();
}
$personnage->bas();
$personnage->position();

// Retiré du Code car ça marche pas :

/*if (isset($_GET["gauche"])) {
    $personnage->gauche();
} else if (isset($_GET["droite"])) {
    $personnage->droite();
} else if (isset($_GET["haut"])) {
    $personnage->haut();
} else if (isset($_GET["bas"])) {
    $personnage->bas();
}*/
?>
<!-- <style>
    form {
        display: flex;
        flex-direction: column;
        text-align: center;
    }
    div {
        display: flex;
        flex-direction: row;
        text-align: center;
    }
    #l1 {
        margin-left : 100px;
    }
    input {
        width: 100px;
    }
</style>
<form action="index.php" method="get">
    <div id='l1'>
        <input type="submit" name="haut" value="haut">
    </div>
    <div id="l2">
        <input type="submit" name="gauche" value="gauche">
        <input type="submit" name="bas" value="bas">
        <input type="submit" name="droite" value="droite">
    </div>
</form> -->