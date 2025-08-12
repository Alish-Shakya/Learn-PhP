<?php
$lines = file("names.txt"); // Read file into an array
unset($lines[1]); // Remove the second line (index starts from 0)
file_put_contents("names.txt", implode("", $lines)); // Write back
echo "2nd line deleted";
?>
