<?php
declare(strict_types=1);
require_once "Shape.php";

class Rectangle implements Shape {

    private $ample;
    private $alt;

    public function __construct(float $ample, float $alt) {
        $this->ample= $ample;
        $this-> alt = $alt;
    }
    public function calculaArea() : float {
        return ($this->ample * $this->alt);
    }

    public function print() : void {
        echo "Rectangle d'ample $this->ample i $this->alt d'alt. 
            Te un area de " . $this->calculaArea() ."<br>" ;
    }
}

?>