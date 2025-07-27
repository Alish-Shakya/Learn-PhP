<!-- DEVELOP a php program that stores the name email and marks of five students using a multidimensional
associative array. Use regular expression expression to validate the format of each email address. then display the record aof only those student who have scored more than 60 marks -->
<?php
// Step 1: Multidimensional associative array of students
$students = [
    [
        "name" => "Alish Shakya",
        "email" => "alish@example.com",
        "marks" => 75
    ],
    [
        "name" => "Sujan Karki",
        "email" => "sujankarki.com",  // Invalid email
        "marks" => 85
    ],
    [
        "name" => "Bikash Thapa",
        "email" => "bikash123@mail.com",
        "marks" => 59
    ],
    [
        "name" => "Kiran Rana",
        "email" => "kiran_rana@gmail.com",
        "marks" => 90
    ],
    [
        "name" => "Ramesh Neupane",
        "email" => "ramesh@neupane.net",
        "marks" => 61
    ]
];

// Step 2: Regular expression for validating email
$email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

// Step 3: Display students with marks > 60 and valid email
echo "<h3>Students with Valid Email and Marks > 60</h3>";
echo "<table border='1' cellpadding='10'>";
echo "<tr><th>Name</th><th>Email</th><th>Marks</th></tr>";

foreach ($students as $student) {
    if (preg_match($email_pattern, $student["email"]) && $student["marks"] > 60) {
        echo "<tr>";
        echo "<td>{$student["name"]}</td>";
        echo "<td>{$student["email"]}</td>";
        echo "<td>{$student["marks"]}</td>";
        echo "</tr>";
    }
}

echo "</table>";
?>
