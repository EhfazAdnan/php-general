<?php
   function array_change_value_case($input, $ucase){
       $case = $ucase;
       $narray = array();

       if(!is_array($input)){
           return $narray;
       }

       foreach($input as $key => $value){
           if(is_array($value)){
               $narray[$key] = array_change_value_case($value, $case);
               continue;
           }
           $narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
       }
       return $narray;
   }

   $color = array('A' => 'Blue', 'B' => 'Green', 'C' => 'Red');
   echo 'Actual array';
   echo "<br/>";
   print_r($color);
   echo "<br/>";

   echo 'Values are in lower case -- ';
   $myColor = array_change_value_case($color, CASE_LOWER);
   print_r($myColor);
   echo "<br/>";

   echo 'Values are in upper case -- ';
   $myColor = array_change_value_case($color, CASE_UPPER);
   print_r($myColor);
   echo "<br/>";

   // sum numbers using loop
   echo "<br/>";
   $sum = 0;
   for($x = 1; $x<=30; $x++){
       $sum += $x;
   }

   echo "Sum : " . $sum;


?>