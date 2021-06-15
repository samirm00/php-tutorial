<?php
/** 
 * PHP is an open source server side scripting language 
 * your first program 'Hello, World'
 * every signle line of code should end with ;
 *  
 */


echo 'Hello, World'.'<br>' ;
print 'Hello, There!'.'<br>' ;

// varibles 

 $height = 1.23 ;    //double 
 $is_male = true ;   // boolean 
 $age = 28 ;         // integer 
 $salary = null  ;   // null
 $name = 'John' ;    // string

 echo $age .'<br>' ;
 echo $height .'<br>' ;
 echo $is_male .'<br>' ;
 echo $salary .'<br>' ;
 echo $name .'<br>' ;



/* 
The scope of a variable is where the variable can beused.
in PHP there are 3 differet variables scope:

    1- Global scope : is a vraible decalred outside of the function scope , it can't be access inside the function
    2- Local scope : is a varibale declared inside a function and can be used only inside the function

    Note : we can use `global` keyword before the variables name to access the global variables inside a function 

    Note : PHP also stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable.

    3- Static : when a function is executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. we can do that using `static` keyword 

*/

// functions in PHP 

function test1 () {
    global $age ;
    return  $age ; 
}

echo test1() ;
echo'<br>' ;

// functions in PHP 

function test2 () {

    return $GLOBALS['age'] ;
}

echo test2() ;
echo'<br>' ;

function test3 () {
    static $num = 0 ;
    echo $num ;
    $num++ ;
}

echo test3() ;
echo'<br>' ;

echo test3() ;
echo'<br>' ;

echo test3() ;
echo'<br>' ;

echo test3() ;
echo'<br>' ;

// echo and print 
/*
    both used to output data to the screen. there are a few differnces :

    - `echo` : has no return value and it takes many parameters.
    - `print` : has return value 1 so it can be used in expession and takes one parameter only.

*/

echo 'Hello there'.'<br>' ;
print 'Hello there'.'<br>' ;

echo '<h1> Hello from echo </h1>'.'<br>' ;
print '<h1> Hello from print </h1>'.'<br>' ;


