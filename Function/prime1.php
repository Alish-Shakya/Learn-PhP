<!-- <?php
echo "Prime numbers between 1 and 100 are: <br>";

for ($num = 2; $num <= 100; $num++) {
    $isPrime = true;


    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
        }
    }

    if ($isPrime) {
        echo $num . " ";
    }
}
?> -->



<?php
echo "Prime numbers between 1 and 100 are: <br>";

for ($num = 2; $num <= 100; $num++) {
    $isPrime = true;

    // Check divisibility up to num / 2
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $num . " ";
    }
}
?>
