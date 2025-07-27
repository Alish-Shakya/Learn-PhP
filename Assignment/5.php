<!DOCTYPE html>
<html>
<head>
  <title>Arithmetic & Even Check</title>
</head>
<body>
  <h2>Enter Two Numbers</h2>
  <form method="post">
    Number 1: <input type="number" name="num1" required><br><br>
    Number 2: <input type="number" name="num2" required><br><br>
    <input type="submit" name="submit" value="Calculate">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    // Accept input
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    // Arithmetic operations
    $sum = $num1 + $num2;
    $diff = $num1 - $num2;
    $prod = $num1 * $num2;
    $div = $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero";
    $mod = $num2 != 0 ? $num1 % $num2 : "Undefined";

    // Display results
    echo "<h3>Results:</h3>";
    echo "Addition: $sum <br>";
    echo "Subtraction: $diff <br>";
    echo "Multiplication: $prod <br>";
    echo "Division: $div <br>";
    echo "Modulus: $mod <br>";

    // Check if both numbers are even
    if ($num1 % 2 == 0 && $num2 % 2 == 0) {
      echo "<br>✅ Both numbers are even.";
    } else {
      echo "<br>❌ Both numbers are not even.";
    }
  }
  ?>
</body>
</html>
