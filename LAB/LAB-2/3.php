<!-- program to display full name by concadicate -->


<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=e, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
            <form method="GET" action="">
                    Enter a first name: <input type="text" name="first" id="first">
                    Enter a last name: <input type="text" name="last" id="last">
                    <input type="Submit" Value="joda">
          </form>
</body>
</html>

<?php

          if($_SERVER["REQUEST_METHOD"]=="GET"){

          $first = $_GET["first"];
          $last = $_GET["last"];


          echo "My full name is " .$first ." " .$last;
       }

?>

