<?php

// php 7 release date 3rd dec 2015
// uses zend engine 3

// advantage
/* 1. Improve performance
2. Lower memory consumption
3. Scalar type declarations
4. Consistent 64-bit support */


/* --------------------------------------------------------------------------- */


// Scalar DataType Hinting => can use data type specifications //

// in version 5

// class User{}
// function demo(Array $a){
//     var_dump($a);
// }
// demo(['1']);

// echo "<br/>";

// class User{}
// function demo(User $a){
//     var_dump($a);
// }
// demo(new User);

// in version 7
// declare(strict_types=1);
// function test(int $a, int $b){
//    return $a + $b;
// }
// echo test(4,"2");


/* --------------------------------------------------------------------------- */


// return type declaration //

// function demo() : string
// {
//     return 'hello';
// }
// echo demo();


/* --------------------------------------------------------------------------- */


// Integer division function => intdiv()

/* $a = 30;
$b = 4;
echo $c = $a / $b;
echo "<br/>";
echo $d = intdiv($a,$b); */


/* --------------------------------------------------------------------------- */


// execption handleing -> try - catch - finally

/* 1. throwable interface
2. error class
3. error & exception handling
4. fatal, type and parse errors
5. reserved words 
resource : eduonix learning solutions
URL: https://www.youtube.com/watch?v=B9p5Tjj-q8E
*/


/* --------------------------------------------------------------------------- */


// closure::call() method


/* --------------------------------------------------------------------------- */


// anonymous classes
// not available a user define name for a class

/* Use when
-> not need to documented the class
-> use only once
-> when class is simple, one-off objects need to be created

$obj - new Class {
    // where all property and methods
} */


/* --------------------------------------------------------------------------- */


// combined / spaceship operator <=>

/* $a <=> $b
If returns -1, 0, 1 when $a is respectively less than, equal to or greater than $b */


/* --------------------------------------------------------------------------- */


// null coalesce operator
// ternary operator

/* echo $name = isset($_GET['name']) ? $_GET['name'] : "Not found";
echo "<br/>";
// heres the null coalesce operator
echo $name1 = $_GET['name1'] ?? "Not found"; */

/* --------------------------------------------------------------------------- */


// constant array

// define('arrayName',['1','2','3','4','5']);
// print_r(arrayName[2]);


/* --------------------------------------------------------------------------- */


// anonymous function ; also calls as closures ; also they are call back functions

/* (function(){
    echo 'anonymous function';
})(); */

/* $one = '1';
$two = '2';
$myFunction = function()use($one,$two){
    echo $one;
    echo "<br/>";
    echo $two;
};
$myFunction(); */

/* $one = '1';
$two = '2';
$myFunction = (function()use($one,$two){
    echo $one;
    echo "<br/>";
    echo $two;
})();
 */