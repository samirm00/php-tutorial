<?php
/*
1- Constants are like variables except that once they are defined they cannot be changed.
2- in PHP we don't use $ for the vatiables names.
3- constants by default are global variables and can be accessed inside functions without
any `global` keyword 
*/

// define()

define('NUMBER_CONST', 234) . '<br>';
echo NUMBER_CONST . '<br>';

// it is possibe also to defind an array of constants

define('CARS', ['BMW', 'Nissan', 'Toyota']);

echo '<pre>';
var_dump(CARS);
echo '<pre>';

// In PHP 7 and higher we can defined the constant by just type the name and assign it to a value
