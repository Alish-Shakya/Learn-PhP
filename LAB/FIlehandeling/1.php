<!-- Create a Php program to write user input from a form into a file -->




<form method = "post">
          Name : <input type="text" name="name" id="name">
          <input type="submit" value=" "Save">
</form>


<?php
if ($_SERVER["REQUEST-METHOD"] === "POST"){
          $name = $_POST['name'];
          $file = fopen("names.txt", "a");
}
