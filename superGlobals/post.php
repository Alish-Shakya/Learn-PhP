<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <form method= "post" action="">
                    <h1>POST METHOD</h1>
                    Email: <input type="text" name="email">
                    <input type="submit">
                    <br>
                    <br>
          </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST" && isset( $_POST["email"] ) ){
          $email = htmlspecialchars($_POST["email"]);
          echo"Entered Email " .$email;
}


?>
