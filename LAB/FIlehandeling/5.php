<form method="post">
    Feedback: <textarea name="feedback"></textarea><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = $_POST["feedback"];

    // Append feedback to file
    file_put_contents("feedback.txt", $feedback . "\n", FILE_APPEND);

    echo "Feedback Saved";
}
?>
