<!-- create a php script that uses regular expression to determine whether a given string starts with the characrers
"NEP" and ends with "al". Display a message indicating whether the pattern is matched or not -->

<!DOCTYPE html>
<html>
<head>
    <title>Pattern Match Check</title>
</head>
<body>

<h2>Check if String Starts with "NEP" and Ends with "al"</h2>

<form method="post">
    Enter a string: <input type="text" name="input_string" required>
    <input type="submit" value="Check Pattern">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $str = $_POST["input_string"];

    // Regular expression: ^NEP => starts with "NEP", al$ => ends with "al"
    $pattern = "/^NEP.*al$/";

    if (preg_match($pattern, $str)) {
        echo "<p style='color: green;'>✔ The string <strong>$str</strong> matches the pattern (starts with 'NEP' and ends with 'al').</p>";
    } else {
        echo "<p style='color: red;'>✖ The string <strong>$str</strong> does NOT match the required pattern.</p>";
    }
}
?>

</body>
</html>
