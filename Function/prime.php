<?php
function isPrime($n) {
if($n<2) return false;
for($i= 2; $i<($n); $i++){
          if($n%$i== 0) return false;
}
return true;

}
echo isPrime(13) ?"Prime":"Not Prime";
?>
