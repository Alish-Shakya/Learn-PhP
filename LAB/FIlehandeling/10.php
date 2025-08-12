<?php
$search = "Jhon";
$found = false;
$file = fopen("names.txt", "r");
while(!feof($file));
$line = fgets($file);
if (stripos($line, $search)!==false){
          echo "Found: " .$line. "<br>";
          $found = true;
}
?>
