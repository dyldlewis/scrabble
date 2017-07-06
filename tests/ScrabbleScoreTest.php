<?php
    require_once "src/ScrabbleScore.php";

    class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
    {
        function testScrabbleScoreKeeperCharVal()
        {
            //Arrange
            $test_ScrabbleScore = new ScrabbleScore;
            $input = "$%e#";

            //Act
            $result = $test_ScrabbleScore->scrabbleScoreKeeper($input);

            //Assert
            $this->assertEquals("Please enter letters only!", $result);
        }
    }
?>
