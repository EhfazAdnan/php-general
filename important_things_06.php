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

   // array largest key find
   $numbers = array("1" => "One", "2" => "Two", "3" => "Three");
   $max_key = max(array_keys($numbers));
   echo $max_key;
   echo "<br/>";

   // remove duplicate array element
   function remove_dup($list){
       $num_unique = array_values(array_unique($list));
       return $num_unique;
   }

   $num = array(1,2,3,4,4,5,55,5,5,57,7);
   print_r(remove_dup($num));
   echo "<br/>";

   // first non repeated character

   function find_non_repeat($word){
       for ($i = 0; $i <= strlen($word); $i++){
           if(substr_count($word, substr($word, $i, 1)) == 1){
               return substr($word, $i, 1);
           }
       }
   }

   echo find_non_repeat("Green");
   echo "<br/>";
   echo find_non_repeat("abcdea");
   echo "<br/>";


   // 40 done
   // url : https://www.youtube.com/watch?v=LaoPmE9ywhQ&list=PLH1n1sJO7tbyw7z4FNIrqsF2hZkEoKRf2&index=41

?>