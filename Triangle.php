<?php
declare(strict_types=1);
require_once "Shape.php";

class Triangle implements Shape {
    private $ample;
    private $alt;

    public function __construct(float $ample, float $alt) {
        $this->ample= $ample;
        $this-> alt = $alt;
    }
    public function calculaArea() : float {
        return ($this->ample * $this->alt)/2;
    }
    
    public function print() : void {
        echo "Triangle amb base $this->ample i alçada $this->alt. Te un area de " . $this->calculaArea(). " <br>";
    }
}

?>