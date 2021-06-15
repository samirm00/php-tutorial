<?php
echo 'Data types in PHP' . '<br>';

/*
in PHP there are 8 types of Data:

1- Integer 
2- Double
3- String
4- Boolean
5- Null
6- Array
7- Objects
8- Resources

*/

/*
  1- Integer  is a non-decimal number between -2,147,483,648 and 2,147,483,647.
*/

$num1 = 245;
$age = 25;

echo $num1 . '<br>';
echo $age . '<br>';

/*
  2- Double or deciemal or float is  a number with a decimal point 
*/

$height = 1.82;
echo '<pre>';
var_dump($height);
echo '<pre>';

// var_dump() : is used to return thet type and the value

// some number functions

// is_int() same as is_integer to check if the number is an integer or not  return true or flase

echo is_int($age) . '<br>';
echo is_integer($height) . '<br>';

// some predefind constants in PHP
echo PHP_INT_MAX . '<br>';
echo PHP_INT_MIN . '<br>';
echo PHP_INT_SIZE . '<br>';

// some double or float constants

echo PHP_FLOAT_MAX . '<br>';
echo PHP_FLOAT_MIN . '<br>';

$distance = 1.23;
// some double function
echo is_float($distance) . '<br>';
echo is_double($distance) . '<br>';

// A numeric value that is larger than PHP_FLOAT_MAX is considered `infinite`
echo is_finite(122222222222222222) . '<br>';
echo is_infinite(3477744444444444) . '<br>';

// NaN : not a number we used is_nan()

$value = acos(8);
echo '<pre>';
var_dump(is_nan($value));
echo '<pre>';

// is_numeric() used to find whether a variable is numeric.
// The function returns true if the variable is a number or a numeric string, false otherwise.

echo is_numeric(233) . '<br>'; // true
echo is_numeric('234') . '<br>'; // true
echo is_numeric('hello, there !') . '<br>'; // false

/*
  3- string is a sequence of characteters included in a single quotes'' or double quotes""
  '' or "" are different "" use to render the variables denamically   
*/

// some useful string functions

// strlen() ; returns the length of a string.
$greeting = 'Hello there, hope you are doing fine';

echo strlen($greeting) . '<br>';

// str_word_count()  counts the number of words in a string.

echo str_word_count($greeting) . '<br>';

// strrev() reverses a string.

echo strrev($greeting) . '<br>';

// strpos() function searches for a specific text in a string. If a match is found, the function returns the character
//index  of the first match. If no match found, it will return FALSE

$position = strpos('ask for more information', 'ask') . '<br>';

// str_replace() function replaces some characters with some other characters in a string.

$myString = 'Hello John';

echo $myString . '<br>';
echo str_replace('John', 'Jolie', $myString) . '<br>';

// Casting Strings and Floats to Integers

$numberString = '234';
$convertToNumber = (int) $numberString;

echo '<pre>';
var_dump($convertToNumber);
echo '<pre>';

$stringValue = '123.44' ;
$convertToDouble = (double) $stringValue ;

echo '<pre>';
var_dump($convertToDouble) ;
echo '<pre>';

// convert to string 

$num3 = 123  ;
$convertToString = (string) $num3 ;
echo '<pre>';
var_dump($convertToString) ;
echo '<pre>';

