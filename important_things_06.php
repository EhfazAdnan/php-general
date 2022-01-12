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


   // find day differnece between 2 dates
   $to_date = time();
   $from_date = strtotime("2012-01-31");
   $day_diff = $to_date - $from_date;
   echo floor($day_diff / (60*60*24));
   echo "<br/>";
   echo "<br/>";

   // create table useing loop
 
   ?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
   </head>
   <body>
       <table align="left" border="1" cellpadding="3" cellspacing="0">
           <?php
              for($i = 1; $i <= 10; $i++){
                  echo "<tr>";
                  for($j = 1; $j <= 10; $j++){
                    echo "<td>$i * $j = ".$i * $j."</td>";
                  }
              }
              echo "<tr/>";
           ?>
       </table>
   </body>
   </html>

   <?php
   
   // insert hypen

   for($x = 1; $x <= 10; $x++){
      if($x < 10){
        echo "$x-";
      }else{
          echo "$x";
      }
   }
   echo "<br/>";

   // factorial number

   $n = 6;
   $x = 1;
   for ($i = 1; $i <= $n-1; $i++){
       $x *= ($i+1);
   }
   echo "Factorial : $n = $x";
   echo "<br/>";

   // shortest longest lenth array
   $my_array = array("abcd","abc","de","hjjj","g","war");
   $new_array = array_map('strlen', $my_array);

   echo "The shortest array length is " . min($new_array);
   echo "<br/>";
   echo "The shortest array length is " . max($new_array);
   echo "<br/>";

   // insert a new item in an array

   $original = array('1','2','3','4','5');
   echo 'Original array : ';
   foreach($original as $x){
       echo $x;
   }
   $inserted = '$';
   array_splice($original, 3, 0, $inserted);
   echo " \n After inserted '$' the array is : ";
   echo "<br/>";
   foreach($original as $x){
     echo "$x";
   }
   echo "<br/>";

   // get element of an array
   $color = array(4 => 'white', 6 => 'green', 11 => 'red');
   echo reset($color);
   echo "<br/>";


   // part 50 done

   // multiple elements of two arrays

   function multiple_two_array($x,$y){
       $a = explode(' ', trim($x));
       $b = explode(' ', trim($y));

       foreach($a as $key => $value){
           $output[$key] = $a[$key]*$b[$key];
       }

       return implode(' ',$output);
   }

   echo multiple_two_array(("10 12 3"),('3 4 6'));
   
   ?>