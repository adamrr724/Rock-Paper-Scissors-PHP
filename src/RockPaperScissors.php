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

    function computerPlay($user_input)
    {
        $random_num = rand(1, 3);

        if ($random_num == 1) {
            $computer_input = "Rock";
        }   elseif ($random_num == 2) {
            $computer_input = "Paper";
        }   else {
            $computer_input = "Scissors";
        }

        if ($user_input == "Rock" && $computer_input == "Scissors" || $user_input == "Paper" && $computer_input == "Rock" || $user_input == "Scissors" && $computer_input == "Paper") {
            return "Player 1 Wins!";
        } elseif ($computer_input == "Rock" && $user_input == "Scissors" || $computer_input == "Paper" && $user_input == "Rock" || $computer_input == "Scissors" && $user_input == "Paper") {
            return "Player 2 Wins!";
        } return "Tie Game!";
    }
}

?>
