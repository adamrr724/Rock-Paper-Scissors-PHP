<?php

class RockPaperScissors
{
    private $user_input;
    public $computer_input;

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

    function computerPlay()
    {

        if ($this->user_input == "Rock" && $this->computer_input == "Scissors" || $this->user_input == "Paper" && $this->computer_input == "Rock" || $this->user_input == "Scissors" && $this->computer_input == "Paper") {
            return "User Wins!";
        } elseif ($this->computer_input == "Rock" && $this->user_input == "Scissors" || $this->computer_input == "Paper" && $this->user_input == "Rock" || $this->computer_input == "Scissors" && $this->user_input == "Paper") {
            return "Computer Wins!";
        } return "Tie Game!";
    }
}

?>
