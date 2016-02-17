<?php

    require_once "src/RockPaperScissors.php";

    class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_equal_inputs()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "rock";
            $second_input = "rock";


            //Array
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Tie Game", $result);
        }
        function test_rock_vs_scissors()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissors;
            $first_input = "Rock";
            $second_input = "Scissors";


            //Array
            $result = $test_RockPaperScissors->playGame($first_input, $second_input);

            //Assert
            $this->assertEquals("Rock Wins!", $result);
        }

    }



?>
