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


// execption handleing -> try - catch - finally


// closure::call() method


// anonymous classes


// combined / spaceship operator <=>


/* --------------------------------------------------------------------------- */


// null coalesce operator
// ternary operator

/* echo $name = isset($_GET['name']) ? $_GET['name'] : "Not found";
echo "<br/>";
// heres the null coalesce operator
echo $name1 = $_GET['name1'] ?? "Not found"; */

/* --------------------------------------------------------------------------- */


// constant array

define('arrayName',['1','2','3','4','5']);
print_r(arrayName[2]);