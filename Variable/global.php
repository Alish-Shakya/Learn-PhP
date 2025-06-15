<!-- <?php
$name = "CAB";
$age = 24;
echo "Hello "."$name <br>";
echo "I'm "."$age"." years old";
?>
 -->


 <?php
 $globalVar =  "I am global";
 function showGlobal(){
          global $globalVar;
          echo $globalVar;
 }
 showGlobal();
?>



