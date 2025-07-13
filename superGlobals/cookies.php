<html>
<h1>cookies method</h1>
</html>


<?php
setcookie("ahaga", "Alish", time() +3600);   // expires in 1 hrs

if(isset($_COOKIE["user"]) ){
          echo $_COOKIE["user"];
}else{
          echo "Cookies 'user' is not set yet. Please reload the page";
}



?>
