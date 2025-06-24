<!-- WAP using do-while loop Start from 1 to 20. print only even numbers. Skip number 10 using continue
Stop the loop if number 16 is reached using break -->


<?php

$num = 1;

do {
    if ($num % 2 == 0) {

        if ($num == 10) {
            $num++;  // increment before continue to avoid infinite loop
            continue;
        }

        if ($num == 16) {
            break;
        }

        echo $num . "<br>";
    }

    $num++;
} while ($num <= 20);

?>

