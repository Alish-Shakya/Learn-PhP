<html>
<h1>cookies method</h1>
</html>


<?php
setcookie("user", "Alish", time() +3600);   // expires in 1 hrs

if(isset($_COOKIE["user"]) ){
          echo $_COOKIE["user"];
}else{
          echo "Cookies 'user' is not set yet. Please reload the page";
}

// If name is passed in GET (like ?name=Alish), store it in a cookie
if (isset($_GET["name"])) {
    $name = $_GET["name"];
    setcookie("username", $name, time() + (86400 * 7), "/"); // 7 days
    $_COOKIE["username"] = $name; // To make it instantly available this time
}

// Display the cookie
if (isset($_COOKIE["username"])) {
    echo "Welcome, " . htmlspecialchars($_COOKIE["username"]);
} else {
    echo "No name found. Add ?name=YourName in the URL.";
}




?>
