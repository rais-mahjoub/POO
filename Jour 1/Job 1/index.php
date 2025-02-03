<?php
class Operation {
    public $nombre1,$nombre2;
    public function __construct($nombre1,$nombre2){
        $this->nombre1=$nombre1;
        $this->nombre2=$nombre2;
    }
}

$op = new Operation(3,4);
echo $op->nombre1.'<br>';
echo $op->nombre2;