<?php

class RockPaperScissors
{
    private $user_input;
    public $computer_input;
    // private $first_input;
    // private $second_input;

    function __construct($user_input)
    {
        $this->user_input = $user_input;
        $this->computer_input = $this->getComputerInput();
    }

    function getComputerInput()
    {
        $random_num = rand(1, 3);

        if ($random_num == 1) {
            $computer_input = "Rock";
        }   elseif ($random_num == 2) {
            $computer_input = "Paper";
        }   else {
            $computer_input = "Scissors";
        }
        return $computer_input;
    }

    function getUserInput()
    {
        return $this->user_input;
    }

    // function playGame($first_input, $second_input)
    // {
    //     if ($first_input == "Rock" && $second_input == "Scissors" || $first_input == "Paper" && $second_input == "Rock" || $first_input == "Scissors" && $second_input == "Paper") {
    //         return "Player 1 Wins!";
    //     } elseif ($second_input == "Rock" && $first_input == "Scissors" || $second_input == "Paper" && $first_input == "Rock" || $second_input == "Scissors" && $first_input == "Paper") {
    //         return "Player 2 Wins!";
    //     } return "Tie Game!";
    // }

    function computerPlay()
    {

        if ($this->user_input == "Rock" && $this->computer_input == "Scissors" || $this->user_input == "Paper" && $this->computer_input == "Rock" || $this->user_input == "Scissors" && $this->computer_input == "Paper") {
            return "Player 1 Wins!";
        } elseif ($this->computer_input == "Rock" && $this->user_input == "Scissors" || $this->computer_input == "Paper" && $this->user_input == "Rock" || $this->computer_input == "Scissors" && $this->user_input == "Paper") {
            return "Player 2 Wins!";
        } return "Tie Game!";
    }
}

?>
