<?php


function checkOddEven($num) {
    if ($num % 2 == 0) {
        return "$num is Even";
    } else {
        return "$num is Odd";
    }
}

// Example: check if 7 is odd or even
echo checkOddEven(7);

?>
