<!-- // Variable declared as static within A FUNCTIO RETAIN THEIR VALUE ACROSS MULTIPLE FUNCTION CALLS -->

<?php
function counter(){
          static $count = 0;
          $count++ ;
          echo $count."<br";

}
counter();
counter();
counter();
?>
