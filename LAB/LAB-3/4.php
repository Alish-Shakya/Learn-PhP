          <!-- Write a php script that stores the name and marks of five sy=tudents using an associative array
          use for each loop to iterate through the array and display each student's name along with their corresponding marks
          inn a formated output -->


          <?php
// Step 1: Create an associative array with student name as key and marks as value
$students = [
    "Alish" => 85,
    "Sujan" => 78,
    "Bikash" => 92,
    "Kiran" => 74,
    "Ramesh" => 88
];

// Step 2: Display formatted output using foreach loop
echo "<h3>Student Marks</h3>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Student Name</th><th>Marks</th></tr>";

foreach ($students as $name => $marks) {
    echo "<tr><td>$name</td><td>$marks</td></tr>";
}

echo "</table>";
?>
