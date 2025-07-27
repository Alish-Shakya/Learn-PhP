<!-- Write a php program that accepts an email as input and uses a regular expression to
check wheather it is valid or not. Display an appropriate message to indicate wheatherthe email in a correct format -->


<!DOCTYPE html>
<html>
<head>
    <title>Email Validation</title>
</head>
<body>

<h2>Enter Your Email</h2>
<form method="post">
    Email: <input type="text" name="email" required>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];

    // Regular expression for validating an email
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

    if (preg_match($pattern, $email)) {
        echo "<p style='color: green;'>✔ The email <strong>$email</strong> is in a valid format.</p>";
    } else {
        echo "<p style='color: red;'>✖ The email <strong>$email</strong> is NOT in a valid format.</p>";
    }
}
?>

</body>
</html>
