<!-- WAP that creates an array of 5 fruits. Uses a foreach loop to display each fruit name in a list format -->

<?php

$fruits = array("apple", "mango", "banana", "watermelon", "pinepal");

foreach ($fruits as $output) {

          echo $output ."<br>";
          echo $output[1] . "<br>";
}

echo $fruits[2] ."<br>";
?>
