<!-- Write a php script that creates an array of number.using built-in-array function, find and display the
maximum value minimun valiue and sum of all value in array -->

<?php
// Step 1: Create an array of numbers
$numbers = [45, 78, 23, 89, 12, 56, 91];

// Step 2: Use built-in functions to find max, min, and sum
$max = max($numbers);
$min = min($numbers);
$sum = array_sum($numbers);

// Step 3: Display the results
echo "<h3>Array Values: " . implode(", ", $numbers) . "</h3>";
echo "Maximum Value: $max <br>";
echo "Minimum Value: $min <br>";
echo "Sum of All Values: $sum <br>";
?>
