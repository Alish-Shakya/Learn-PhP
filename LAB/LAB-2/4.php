<!-- gretest number -->


<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <form method="post" action="">
                    number 1: <input type="number" name="number1" id="">
                    number 2: <input type="number" name="number2" id="">
                     number 3: <input type="number" name="number3" id="">
                     <input type="submit" name="thulo kun ho" id="">
          </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){


          $number1 = $_POST["number1"];
          $number2 = $_POST["number2"];
          $number3 = $_POST["number3"];

  if($number1 > $number2 && $number1 > $number2){
          echo"the number1 is greatest";
}

elseif($number2 < $number1 && $number2 > $number3){
                            echo"the number2 is gretest";
}


else{
          echo "the number3 is gretst";
}





}



?>
