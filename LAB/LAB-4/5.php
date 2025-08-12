<?php
interface Drawable {
    public function draw();
}

class Circle implements Drawable {
    public function draw() {
        echo "Drawing Circle<br>";
    }
}

class Square implements Drawable {
    public function draw() {
        echo "Drawing Square<br>";
    }
}

// Creating Objects and Calling draw()
$circle = new Circle();
$square = new Square();

$circle->draw();  // Output: Drawing Circle
$square->draw();  // Output: Drawing Square
?>
