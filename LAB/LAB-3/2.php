<!-- Develop a Php Script that checks wheather a specific word exist in a given sentence using the strpos()
function. If the word is found, replace it with another word using str replace.Also display the midified
string to the user -->


<!DOCTYPE html>
<html>
<head>
    <title>Word Replace in Sentence</title>
</head>
<body>

<h2>Find and Replace Word</h2>

<form method="post">
    Enter a sentence: <input type="text" name="sentence" required><br><br>
    Word to search: <input type="text" name="search" required><br><br>
    Word to replace with: <input type="text" name="replace" required><br><br>
    <input type="submit" value="Check and Replace">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sentence = $_POST["sentence"];
    $search = $_POST["search"];
    $replace = $_POST["replace"];

    // Check if the word exists in the sentence
    if (strpos($sentence, $search) !== false) {
        $modified = str_replace($search, $replace, $sentence);
        echo "<p><strong>Original:</strong> $sentence</p>";
        echo "<p><strong>Modified:</strong> $modified</p>";
    } else {
        echo "<p>The word '<strong>$search</strong>' was not found in the sentence.</p>";
    }
}
?>

</body>
</html>
