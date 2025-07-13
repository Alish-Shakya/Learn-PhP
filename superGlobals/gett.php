<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <form method="get">
                    <h1>GET METHOD</h1>
                    Name: <input type="text" name="name"> <br><br>
                    Age: <input type="number" name="age">
                    <input type="submit" value="Submit">
                    <br>
                    <br>
          </form>
</body>
</html>

<?php








if ( isset( $_GET["name"] ) && isset($_GET["age"]) ){

$name = $_GET["name"];
$age = $_GET["age"];

echo "<h3> Received Data </h3>";
echo "Name: " .$name. "<br>";
echo "Age: " .$age;

}


?>
