<!-- Read and display contents of a file -->


<?php
$file = fopen("names.txt", "r");
while (!feof($file)){
          $line = fgets($file);
          if(trim($line) !== ""){
                    echo $line. "<br>";
          }
}
fclose($file);
?>
