<?php
  for($i = 1; $i <= 5; $i++){
      for($j = 1; $j <= $i; $j++){
        echo "*";
      }
      echo "<br/>";
  }

  echo "<br/>";
  echo '---------------------------------------------';
  echo "<br/>";

  for($i = 1; $i <= 5; $i++){
      for($j = 1; $j <= 5; $j++){
        echo "*";
      }
      echo "<br/>";
  }

  echo "<br/>";
  echo '---------------------------------------------';
  echo "<br/>";

  $n = 4;
  for($i = 1; $i <= $n; $i++){
    for($j = 1; $j <= (2*$n)-1; $j++){
      if($j >= $n-($i-1) && $j <= $n+($i-1)){
        echo "*";
      }else{
        echo "&nbsp;&nbsp;";
      }
      
    }
    echo "<br/>";
  }


  echo "<br/>";
  echo '---------------------------------------------';
  echo "<br/>";

  for($r = 0; $r < 6; $r++){
    for($c = 0; $c < 7; $c++){
      if(($r == 0 && $c%3 != 0) || ($r == 1 && $c%3 == 0) || ($r - $c == 2) || ($r + $c == 8)){
        echo "*";
      }else{
        echo "&nbsp;&nbsp;";
      }
    }
    echo "<br/>";
  }


?>