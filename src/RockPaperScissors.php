<?php

class RockPaperScissors
{
    function playGame($first_input, $second_input)
    {
        if ($first_input == "Rock" && $second_input == "Scissors" || $first_input == "Paper" && $second_input == "Rock" || $first_input == "Scissors" && $second_input == "Paper") {
            return "Player 1 Wins!";
        } elseif ($second_input == "Rock" && $first_input == "Scissors" || $second_input == "Paper" && $first_input == "Rock" || $second_input == "Scissors" && $first_input == "Paper") {
            return "Player 2 Wins!";
        } return "Tie Game!";
    }
}

?>
