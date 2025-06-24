<!-- WAP that takes a person age and citizenShip status (e.g. "Nepali").
Checks if the person is eligible to vote (age> 18) and citizen is "nepali"). prints appropriate message -->

<?php

$citizen = array("Nepali", "chinese", "Indian", "Britian");
$age = 18;
$a = 19;
if($citizen[0] =="Nepali" && $a > $age) {
          echo "elibible to vote";
}
else{
          echo "not elibible";
}

?>
