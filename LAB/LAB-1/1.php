<!-- WAP to calculate grade for which gpa is given -->

<?php
$gpa = 3.5;
if ($gpa >= 3.6) {
          echo "you secured A";
}
elseif( $gpa >= 3.2) {
          echo "you secured B+";
}
elseif( $gpa >= 2.8) {
          echo "you secured B";
}
else {
          echo "you are fail";
}
?>
