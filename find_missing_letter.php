<?php

function find_missing_numbers($getvalues){
  
    $alpha = '';

    foreach(range("a","z") as $letters){
        $alpha .= $letters;
    }

    $start = strpos($alpha, $getvalues[0]);

    for($i = 0; $i < strlen($getvalues); $i++){

        // echo $alpha[$start + $i];
        // echo $getvalues[$i];
        // echo "<br/>";

        if($getvalues[$i] !== $alpha[$start + $i]){
            return $alpha[$start + $i];
        }
    }

    return 'no mismatch';
}

echo find_missing_numbers("bcdfghj");
echo "<br/>";
echo find_missing_numbers("abcd");