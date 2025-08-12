<?php
class MathUtility {
    const PI = 3.14;

    public static function calculateCircleArea($radius) {
        return self::PI * $radius * $radius;
    }
}

// Echo outside the class definition
echo "Area: " . MathUtility::calculateCircleArea(5);
?>
