<!-- Save this as index.php or any .php file and run in a local server like XAMPP -->
<!DOCTYPE html>
<html>
<head>
    <title>String Operations</title>
</head>
<body>

<form method="post">
    Enter a string: <input type="text" name="user_input" required>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["user_input"];

    echo "Original String: $str<br>";
    echo "Uppercase: " . strtoupper($str) . "<br>";
    echo "Lowercase: " . strtolower($str) . "<br>";
    echo "Length: " . strlen($str) . "<br>";
    echo "Reversed: " . strrev($str) . "<br>";
}
?>

</body>
</html>
