<!-- Operator	                    Description

$a + $b	                    Union — combines two arrays (keys from $a are preserved if duplicated in $b)
$a == $b	                    Equality — true if both arrays have the same key/value pairs (order doesn't matter)
$a === $b	                    Identity — true if both arrays have the same key/value pairs in the same order and types
$a != $b or $a <> $b	Inequality — true if arrays are not equal
$a !== $b	                    Non-identity — true if arrays are not identical -->

<?php
$x = array("k" => "Car", "l" => "Bike");
$y = array("a" => "Train", "b" => "Plain");

var_dump($x + $y);
var_dump($x == $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x === $y);
var_dump($x !== $y);
?>
