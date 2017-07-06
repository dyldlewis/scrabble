<?php
    class ScrabbleScore
    {
        private $score;

        function scrabbleScoreKeeper($input)
        {

            $input = strtolower($input);

            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $input) || (ctype_digit($input))) {
              $this->score = "Please enter letters only!";
            } else {

            $input = str_split($input);

            foreach($input as $letter) {
              if (($letter == "a") || ($letter == "e") || ($letter == "i") || ($letter == "o") || ($letter == "u") || ($letter == "l") || ($letter == "n") || ($letter == "r") || ($letter == "s") || ($letter == "t")) {
                $this->score += 1;
              } elseif (($letter == "d") || ($letter == "g")) {
                $this->score += 2;
              } elseif (($letter == "b") || ($letter == "c") || ($letter == "m") || ($letter == "p")) {
                $this->score += 3;
              } elseif (($letter == "f") || ($letter == "h") || ($letter == "v") || ($letter == "w") || ($letter == "y")) {
                $this->score += 4;
              } elseif ($letter == "k") {
                $this->score += 5;
              } elseif (($letter == "j") || ($letter == "x")) {
                $this->score += 8;
              } elseif (($letter == "q") || ($letter == "z")) {
                $this->score += 10;
              }
            }
          }
          return strval($this->score);
        }
    }
?>
