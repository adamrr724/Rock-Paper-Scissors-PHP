<?php

class RockPaperScissors
{
    function playGame($first_input, $second_input)
    {
        if ($first_input == $second_input) {
            return "Tie Game";
        } elseif ($first_input == "Rock" && $second_input == "Scissors") {
            return "Rock Wins!";
        }

    }



}

?>
