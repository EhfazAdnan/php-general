<?php

// introduce JIT (Just In Time Compilation)
// -> php regular run process: php script -> lexing/tokenizing -TOKENS> parsing -AST> compilation -OPCODES> execuition -> output 

// -> if nothing change it will not compile it again(use from cache)

   /* -> if in cache -> OPCACHE -> -OPCODES> execuition -> output
   -> if not in cache -> follows the regular process  */


/* ----------------------------------------------------------- */


// union type //
// multiple type of data hinting available in version 8
/* function hello(int|float $a){
    echo $a;
}
hello(10); */


/* ----------------------------------------------------------- */


// construction property promortion
/* class Person{
    public function __construct(public string $firstName, public string $lastName, public int $age){

    }
} */


/* ----------------------------------------------------------- */


// nullsafe operator

/* $country = null;
if($session !== null){
    $user = $session->user;

    if($user !== null){
      $address = $user->get();

      if($address !== null){
        $country = $address->country;
      }

    }
}

$country = $session?->user?->get()?->country; */


/* ----------------------------------------------------------- */


/* // trailing comma in parameters
function hello($name,){
    echo 'hello';
}

// extra , comma don't gives an error version 8 */


/* ----------------------------------------------------------- */


// match expression
/* $status = 300;
switch($status){
    case 200:
    case 300:
        $message = null;
        break;
    case 400:
        $message = "Not Found";
        break;
    case 500:
        $message = "Server Error";
        break;
    default:
        $message = "Unknown status code";
        break;
}

// In version 8

$message = match ($status){
    200,300 => null;
    400 => "not found",
    500 => "server error",
    default => 'unknown status code',
}; */


/* ----------------------------------------------------------- */

?>