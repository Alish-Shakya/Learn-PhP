<!-- create A FORM TO ACCEPT TWO NUMBER FROM  THE USER AND DISPLAY THERI SUM USING THE POST METHOD -->

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <form method="Post" action="">
                    Enter First Number: <input type="text" name="num1" id="num1"> <br/>
                    Enter Second Number: <input type="text" name="num2" id="num2"> <br/>
                    <input type="submit" Value="Add"> <br/>
          </form>
</body>
</html>
<?php
       if($_SERVER["REQUEST_METHOD"]=="POST"){
          $num1= $_POST["num1"];
          $num2= $_POST["num2"];

          $sum = $num1+$num2;
          echo "the Sum is" . $sum;
       }
?>
