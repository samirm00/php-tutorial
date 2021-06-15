<?php
/*
 PHP has some mathmatical math function that allows you to perform 
 mathematical tasks on numbers.
*/

// pi() return the pi value

echo pi(). '<br>' ;

// min() and max() functions can be used to find the lowest or highest value in a list of arguments

echo max(20,23,34,57). '<br>' ;  // it will return 57
echo min(-1, 3, 4,5). '<br>' ; // it will return -1

// abs() returns the absolute (positive) value of a number 

echo abs(-30). '<br>' ;

// sqtr()  returns the square root of a number 

echo sqrt(81). '<br>' ;

// round()  it rounds a double number to its nearest integer

echo round(1.5). '<br>' ;
echo round(1.6). '<br>' ;
echo round(1.3).'<br>' ;

// rand() create  a random number   rand(min, max) we can control the number range using min & max
// rand() is different from Math.random() in JavaScript 

echo rand(). '<br>' ;
echo rand(1,5). '<br>' ;


