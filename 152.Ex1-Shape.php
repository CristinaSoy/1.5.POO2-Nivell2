<?php
declare(strict_types=1);
echo "<h2>Sprint 1. Tema 4. Poo 1. Nivell 1.</h2>";
echo "<h3>Exercici 2. Clase abstracta Shape amb métode constructor i subclasses Triangle i Rectangle </h3>";

require_once "Shape.php";
require_once "Triangle.php";
require_once "Rectangle.php";
require_once "Cercle.php";

$formes = [];
$formes= array(
    new Triangle(10,3.5),
    new Rectangle(10,2),
    new Cercle(3.333),
);

foreach($formes as $forma) {
    $forma->print();
}

?>