<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <form method="Post" action="">
                    Enter a number: <input type="number" name="num1" id="number">
                    <input type="Submit" Value="click">
          </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
          $num1=$_POST["num1"];

          if($num1 % 2 == 0)
                    {
                              echo"the number is even $num1";
                    }
                    else{
                              echo "the number is odd $num1 ";
                    }
}

?>



