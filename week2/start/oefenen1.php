<?php
$arrayTest = [1,5,9];
$hasValue = 1234;
/*
var_dump is used to dump all information about a variable.
 */
var_dump((bool)$hasValue);
var_dump($arrayTest);

/*outputs false if:
    - if a string is empty
    - if a number is 0
    - if an array is empty
and true if not.
*/


/* Constants */
define('NEW_CONSTANT', "Hello new constant");

echo NEW_CONSTANT;

/* What makes constants useful?
    They can be used anywhere.
 */


/* Check a variable type */

$intVar = 1234;
$stringVar = "I'm a string";
$boolVar = false;
$floatVar = 12.34;

/* Hieronder word gecheckt of het variable een integer, boolean, array en float is.
    - Zo ja, output = 1.
    - Zo niet, output = niks.
*/
echo is_int($intVar);
echo is_bool($stringVar);
echo is_array($boolVar);
echo is_float($floatVar);
echo is_string($stringVar);


/* Check if a constant is defined with defined(). */

define('CHECK_CONSTANT', "Yes I'm a constant");

/*  - Zo ja, output = 1.
    - Zo niet, output = niks.
*/
echo defined('CHECK_CONSTANT');


/* FUNCTIONS */

/* syntax:
function createName($parameter, $anotherParameter)
{
    //..perform some function here;
} */

/*Basic function example*/
function listOfBooks()
{
    echo "Hamlet/n";
    echo "Romeo and Juliet/n";
}

listOfBooks();


/* Parameters & default values */

function bookByAuthorYear($tempAuthorName, $tempYear = 1920)
{
    echo $tempYear;
    echo "\n";
    echo $tempAuthorName;
}

$year = 1910;
$authorName = "William Shakespeare";

bookByAuthorYear($authorName, $year); // year = 1910, takes the variable.
bookByAuthorYear($authorName); // year = 1920, takes the default variable set in $tempYear


/* return a value with a function */

function getAuthor()
{
    return "Charles Dickens";
}

/* call a function by using a variable name. */
$variableFunctionName = "getAuthor";

echo $variableFunctionName();

 /* variable values inside a function cannot be used outside the function
 except by using "global" */

 $authorNames = 18;

 function setAuthorName()
{
    global $authorNames;
    $authorNames = "Charles Babbage";
}

/* because of "global", 18 is overwritten by "Charles Babbage".
If the function wasn't ran, it would still output 18. */
setAuthorName();
echo $authorNames;

/* STRINGS */

/* single quotes vs double quotes */
$currency = 'penny';
$sampleString = 'A $currency saved is a penny earned.';
/* single quotes outputs everything as text and variables cant be used.*/

$misc = 'St. Patrick\'s Day';
echo $misc;
/* The single quote would end this string, so to use a single quote in a string we use \ in front.*/

$currency = "penny";
$sampleString = "A $currency saved is a penny earned.";
echo $sampleString;

$var = 2;
echo "{$var}nd place"; //{} in a string for gluing a string directly onto text.

echo $var."nd place"; // with a . you get the same effect.
$misc = "\n"; // means new line.
echo $misc;
echo "test";

/* heredoc */
/*EOT = end of text*/
echo <<<EOT
Hallo;
Dit is een block of text.
        Je weet tochhhhhhhhh.
EOT;


/* PHP BUILT IN STRING FUNCTIONS*/

/* make a string all uppercase*/
$quote = "To be or not to be.";

$quote = strtoupper($quote); //strtolower() = for all lowercase.

echo $quote;

/* count how many characters and spaces are in a string.*/
$length = strlen($quote);

echo $length;

/* find a specific string position. */
/* parameters: (string variable, what word or character you want to find, pos it starts searching. */
echo strpos($quote, "BE", 4);

echo strpos($quote, "T");
/* it starts counting at 0, and outputs nothing if it finds nothing. */

/* replace a specific word in a string*/
/* parameters(search for word, replace this word with, search string, OPTIONAL: counts times the word is replaced. */
$quoteNew = "To be or not to be. That is the question.";

$replaced = str_replace("be", "know", $quoteNew, $countReplaced);


echo $replaced;
echo $countReplaced;

$quoteNew = "To be or not to be. That is the question.";

/* sub string */
/* parameters: (string, offset string start. can you - aswell start count at end, OPTIONAL: string end. */
echo substr($quoteNew, 6, 9);

/* split up a string and put them in an array. */
/* parameters: (the string, OPTIONAL: length of single item put in array. Default is 1. */
$varArray = str_split($quoteNew, 6);

print_r($varArray);