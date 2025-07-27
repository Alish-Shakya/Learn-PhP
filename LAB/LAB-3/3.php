<!-- create a php program taht stores the name of five student in a numberically indexed array. Use a loop
to start the array IN A ASCENDING alpabet order and then display each students name one by one using for loop A -->


<?php
// Step 1: Create an indexed array with 5 student names
$students = ["Sujan", "Alish", "Bikash", "Kiran", "Ramesh"];

// Step 2: Sort the array in ascending alphabetical order
sort($students);

// Step 3: Display each student name one by one with A --> format
$labels = range('A', 'E'); // Create labels A to E

for ($i = 0; $i < count($students); $i++) {
    echo $labels[$i] . " --> " . $students[$i] . "<br>";
}
?>
