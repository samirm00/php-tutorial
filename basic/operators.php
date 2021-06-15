<?php

/*
in PHP we have the following operators :
=======================================

Assignment operators
Arithmetic operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators
*/

// assignment operator (=) assigns a value to a variable

$name = 'John' ;
echo $name . '<br>' ;

/* 
Arithmetic operators
====================
+   addition	
-	Subtraction
*	Multiplication	
/	Division	
%	Modulus	
**	Exponentiation
*/

$num1 = 20 ;
$num2 = 2 ;
$num3 = 3 ;

$addition = $num1 + $num2 ;
echo $addition . '<br>' ;

$substraction = $num1 - $num2 ;
echo $substraction . '<br>' ;

$multiplication = $num1 * $num2 ;
echo $multiplication . '<br>' ;

$divition = $num1 / $num2 ;
echo $divition . '<br>' ;

// the modulus or the reminder 
$modulus = $num1 % $num2 ;
echo $modulus . '<br>' ;

$exponentation = $num1 ** $num2 ;
echo $exponentation . '<br>' ;

/* 
Comparison operators
====================
All return true or false 

== equal  comapre the values
=== identical or stricly equal compare the values and the types

!= or <>  not equal comapre the values 
!==  comapre the types and the values 

>= less or equal 
<= greater or equal 

<=> spaceship  returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. introdcuced in PHP7
*/

// $num4 = 14 ;
// $num5 = 15 ;

// $num4 <==> $num5 ; 


/*
PHP Increment / Decrement Operators
===================================
++$x  	Pre-increment   Increments $x by one, then returns $x
$x++    Post-increment  Returns $x, then increments $x by one
--$x    Pre-decrement   Decrements $x by one, then returns $x
$x--    Post-decrement  Returns $x, then decrements $x by one

*/

$num6 = 10 ;

echo ++$num6. '<br>' ;
echo $num6++ . '<br>' ;

echo --$num6. '<br>' ;
echo $num6-- . '<br>' ;


/*
Logical Operators
$x ;
$y;

and &&  True if both $x and $y are true
or ||   True if either $x or $y is true
xor     True if either $x or $y is true, but not both
!      True if either $x is false 

*/

$x = true ;
$y = false ;

echo $x && $y . '<br>' ;
echo $x || $y . '<br>' ;
echo $x xor $y . '<br>' ;
echo !$x . '<br>' ;







/*
String operators:
. concatenation 
.= appending 
*/

echo 'Hello'.' world'. '<br>' ;

$string1 = 'Hello ' ;
$string2 = 'world' ;

echo $string1.=$string2. '<br>' ;


/*
Array operators:
===============
+ Union merge $x and $y arrays 
== $x1 ==$y1 Returns true if $x1 and $y1 have the same key/value pairs
=== return true if $x1 and $y1 have the same key/value pairs in the same order and of the same types
!=	Returns true if $x1 is not equal to $y1
!== Returns true if $x1 is not identical to $y1
*/

$x1 = array(
    'name'=> 'John',
    'age' => 30 ,
    'address' => 'Brussels'
) ;
$y1 = array(
    'name'=> 'James',
    'age' => 22 ,
    'address' => 'Mons'
) ;

$sum = $x1 + $y1 ;
echo '<pre>';
var_dump($sum) ;
echo '<pre>';





/*
Ternary                  $x ? expression1 : expression2 
if $x is true it will return expression1 else it will return expression2

Null coalescing          $x expression1??  expression2
it will return  expression1 if it is existed and not null else it will return  expression2 

*/

$isMale = true ;
$canDrive =  false ;

$isMale ?   'you are male': 'you are female' ;

// $canDrive 'Yes he can'?? 'No he can not ' ;