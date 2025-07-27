<!-- create a mulitdimensional array in php to store subject wise marks for three students. Each student should have
marks for at least three subject. write a script to calculate and display the total marks obtained by each
student -->

<?php
// Step 1: Create a multidimensional array for 3 students and 3 subjects each
$students = [
    "Alish" => ["Math" => 85, "Science" => 78, "English" => 90],
    "Sujan" => ["Math" => 88, "Science" => 82, "English" => 75],
    "Bikash" => ["Math" => 92, "Science" => 89, "English" => 84]
];

// Step 2: Display total marks for each student
echo "<h3>Student Total Marks</h3>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Student Name</th><th>Total Marks</th></tr>";

foreach ($students as $name => $subjects) {
    $total = 0;
    foreach ($subjects as $subject => $marks) {
        $total += $marks;
    }
    echo "<tr><td>$name</td><td>$total</td></tr>";
}

echo "</table>";
?>
