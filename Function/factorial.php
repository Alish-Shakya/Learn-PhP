<?php

function factorial($num) {
    $fact = 1;
    for ($i = 1; $i <= $num; $i++) {
        $fact *= $i;
    }
    return $fact;
}

// Example: Find factorial of 5
echo "Factorial of 5 is: " . factorial(5);

?>
