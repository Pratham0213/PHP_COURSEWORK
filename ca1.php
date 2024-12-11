<?php
function guessNumberGame() {
    $targetNumber = rand(1, 100); // Generate a random target number between 1 and 100
    $userGuess = null;
    $message = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if the form has been submitted
        $userGuess = intval($_POST['guess']); // Read user input from the form
        
        if ($userGuess < $targetNumber) {
            $message = "Too low! Try again.";
        } elseif ($userGuess > $targetNumber) {
            $message = "Too high! Try again.";
        } else {
            $message = "Congratulations! You guessed it!";
        }
    }
    // Display the form
    echo '<form method="post">';
    echo 'Guess a number between 1 and 100: <input type="number" name="guess">';
    echo '<input type="submit" value="Submit">';
    echo '</form>';

    if (!empty($message)) {
        echo $message;
    }
}

guessNumberGame();
?>
