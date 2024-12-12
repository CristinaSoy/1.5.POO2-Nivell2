<?php
declare(strict_types=1);
require_once "Shape.php";

class Cercle implements Shape {
    private $radi;
 
    public function __construct(float $radi) {
        $this->radi= $radi;
    }
        
    public function calculaArea() : float {
        return round((($this->radi **2)* M_PI),2);
    }

    public function print() : void {
        echo "Cercle de radi $this->radi. Te un area de " . $this->calculaArea() ."<br>" ;
    }
}

?>