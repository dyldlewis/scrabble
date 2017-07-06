<?php
    class ScrabbleScore
    {
        function scrabbleScoreKeeper($input)
        {
            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $input) || (ctype_digit($input))) {
                return "Please enter letters only!";
            }
        }
    }
?>
