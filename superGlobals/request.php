<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <form method="post">
          <h1>REQUEST METHOD</h1>
          Name: <input type="text" name="username">
          <input type="submit">
          <br>
          <br>
          </form>
</body>
</html>

<?php
if(isset($_REQUEST["username"]) ) {
          $name =  htmlspecialchars( $_REQUEST["username"]);
          echo("Name: ".$name);
}
?>
