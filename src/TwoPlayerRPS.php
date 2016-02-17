<?php

class TwoPlayerRPS
{
    private $first_input;
    private $second_input;

    function __construct($first_input, $second_input)
    {
        $this->first_input = $first_input;
        $this->second_input = $second_input;

    }

    function getFirstInput()
    {
        return $this->first_input;
    }

    function getSecondInput()
    {
        return $this->second_input;
    }

    function playGame()
    {
        if ($this->first_input == "Rock" && $this->second_input == "Scissors" || $this->first_input == "Paper" && $this->second_input == "Rock" || $this->first_input == "Scissors" && $this->second_input == "Paper") {
            return "Player 1 Wins!";
        } elseif ($this->second_input == "Rock" && $this->first_input == "Scissors" || $this->second_input == "Paper" && $this->first_input == "Rock" || $this->second_input == "Scissors" && $this->first_input == "Paper") {
            return "Player 2 Wins!";
        } return "Tie Game!";
    }
}

?>
