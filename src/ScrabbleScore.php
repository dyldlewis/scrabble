<?php
    class ScrabbleScore
    {
        private $score;

        function scrabbleScoreKeeper($input)
        {
            $input = strtolower($input);

            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $input) || (ctype_digit($input))) {
                $score = "Please enter letters only!";
            } elseif (($input == "a") || ($input == "e") || ($input == "i") || ($input == "o") || ($input == "u") || ($input == "l") || ($input == "n") || ($input == "r") || ($input == "s") || ($input == "t")) {
                $score = "1";
            } elseif (($input == "d") || ($input == "g")) {
                $score = "2";
            } elseif (($input == "b") || ($input == "c") || ($input == "m") || ($input == "p")) {
                $score = "3";
            } elseif (($input == "f") || ($input == "h") || ($input == "v") || ($input == "w") || ($input == "y")) {
                $score = "4";
            } elseif ($input == "k") {
                $score = "5";
            } elseif (($input == "j") || ($input == "x")) {
                $score = "8";
            } elseif (($input == "q") || ($input == "z")) {
                $score = "10";
            }
            return $score;
        }
    }
?>
