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

   // combine and merge array

   $array1 = array(array(77,87), array(23,45));
   $array2 = array("w3School","com");

   function merge_arrays_by_index($x, $y){
       $temp = array();
       $temp[] = $x;
       
       if(is_scalar($y)){
           $temp[] = $y;
       }else{
           foreach($y as $k => $v){
               $temp[] = $v;
           }
       }

       return $temp;
   }

   echo '<pre>';
   print_r(array_map('merge_arrays_by_index',$array1,$array2));


   // random number generate
   $n = range (11, 20);
   shuffle($n);

   for ($x = 0; $x < 10; $x++){
       echo $n[$x];
   }
   echo "<br/>";

?>