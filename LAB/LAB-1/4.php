<!-- WAP using a while loop to find the factorial of a given number -->

<?php
$num = 10;
$fact = 1;
$i = 1;

while ($i <= $num) {
    $fact *= $i;
    $i++;
}

echo "Factorial of $num is $fact";
?>
