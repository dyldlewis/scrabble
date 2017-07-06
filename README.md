# _Scrabble_

#### _Epicodus-PHP, Week 2 BDD Practice, 07.6.2017_

#### By _**Dylan Lewis and Nathan Stewart**_

## Description

_This PHP exercise allows the user to enter a word into a form, and returns a scrabble score for that word._

## Prerequisites

_You will need the following properly installed on your computer:_

* [MAMP](https://www.mamp.info/en/) for Windows or MacOS
* [PHP](https://secure.php.net/)
* [Composer](https://getcomposer.org/)

## Configuration/Dependencies

_The app will use Silex, PHPUnit, and Twig._

## Setup/Installation

* Open GitHub site on your browser: https://github.com/GStewartN/Scrabble
* Select the dropdown (green box) "Clone or download"
* Copy the link for the GitHub repository
* Open Terminal on your computer
* In Terminal, perform the following steps:
  * type 'cd desktop' and press enter
  * type 'git clone' then paste the repository link and press enter
  * type 'cd Scrabble' to access the path on your computer
  * type 'composer install' in terminal to download dependencies
  * type 'cd web' to enter the web folder, then type 'php -S localhost:8000' to open local server
* In your browser, enter 'localhost:8000' to view the webpage on your browser


## Specifications

| Behavior | Input | Output |
|----------|-------|--------|
| User visits landing page | User enters a number or a word with special characters | A new page displays with a message asking user to only enter letters |
| User visits landing page | User enters a single letter word | A new page displays with the entered word and the score
| User visits landing page | User enters a multiple letter word into form and clicks enter button | A new page displays with the entered word and the score |
| User visits landing page | User enters multiple words (not really legal in scrabble) | A new page displays with the entered words and the total score


## Technologies Used

* _PHP_
* _HTML_
* _Bootstrap_
*  _CSS_
* _Silex_
* _Twig_
* _Composer_
* _MAMP_
* _PHPUnit_

### License

MIT License

Copyright &copy; 2017 Dylan Lewis and Nathan Stewart

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
