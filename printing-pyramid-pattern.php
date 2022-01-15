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


?>