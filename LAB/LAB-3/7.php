<!-- create a php script that defnes an array containing names of different fruits. use a foreach loop to print each
fruit on a new line and also count and diaplay the total number of fruits in the array  -->


<?php
// Step 1: Define an array of fruits
$fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];

// Step 2: Print each fruit using foreach
echo "<h3>List of Fruits:</h3>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Step 3: Count and display total number of fruits
$total = count($fruits);
echo "<br>Total number of fruits: $total";
?>
