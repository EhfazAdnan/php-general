<?php
   // delay execuition
   echo 'hello World';

   $value  = 1;

   if($value == 0){
    sleep(5);
    echo 'After Sleep function runs';
   }
   echo "<br/>";



   // delete an element from array
   $x = array(1,2,3,4,5);
   var_dump($x);
   echo "<br/>";
   unset($x[3]);
   var_dump($x);
   echo "<br/>";

   // last date of code update
   echo "Last Modified: " . date("F d Y H:i:s.", getlastmod());
   echo "<br/>";

?>