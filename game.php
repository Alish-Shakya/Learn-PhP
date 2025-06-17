<?php
// Random number between 1 and 10
$secretNumber = rand(1, 10);

// Check if form was submitted
if (isset($_POST['guess'])) {
    $userGuess = $_POST['guess'];

    if ($userGuess == $secretNumber) {
        echo "<h3>🎉 Congratulations! You guessed it right. Number was $secretNumber.</h3>";
    } else {
        echo "<h3>❌ Wrong guess. You picked $userGuess but the number was $secretNumber.</h3>";
    }
}
?>

<h2>🎲 Guess the Number Game</h2>
<p>Pick a number between 1 and 10:</p>

<form method="post">
    <input type="number" name="guess" min="1" max="10" required>
    <button type="submit">Guess</button>
</form>
