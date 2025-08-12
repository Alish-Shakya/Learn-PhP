<form method="post">
    Marks: <input type="number" name="marks">
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marks = $_POST['marks']; // Use '=' instead of '-'
    echo $marks >= 40 ? "Pass" : "Fail";
}
?>
