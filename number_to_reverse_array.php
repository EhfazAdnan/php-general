<?php

function number_to_reverse($x){

   // convert to array
   $arrayOfString = str_split($x);

   // convert to array element
   $arrayOfString = array_map("intval", $arrayOfString);

   // array reverse
   $arrayOfString = array_reverse($arrayOfString);

   return $arrayOfString;
}

echo "<pre>";
var_dump(number_to_reverse(1234567876543));
echo "</pre>";