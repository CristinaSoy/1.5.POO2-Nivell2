<?php
declare(strict_types=1);

abstract class Shape {
    protected $ample;
    protected $alt;

    public function __construct(float $ample, float $alt) {
        $this->ample= $ample;
        $this-> alt = $alt;
    }
    
    abstract public function calculaArea() : float;

    public function print() : void {
        echo "ample: $this->ample i alt: $this->alt<br>";
    }
}

?>