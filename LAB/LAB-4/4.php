<?php
abstract class Shape {
    abstract public function calculateArea();
}

class Rectangle extends Shape {
    public $length = 10, $width = 5;

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

class Circle extends Shape {
    public $PI = 3.14, $radius = 10;

    public function calculateArea() {
        return $this->PI * $this->radius * $this->radius;
    }
}

$react = new Rectangle();
echo "Area of Rectangle is: " . $react->calculateArea() . "<br>";

$circle = new Circle();
echo "Area of Circle is: " . $circle->calculateArea();
?>
