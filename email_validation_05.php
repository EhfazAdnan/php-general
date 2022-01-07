<?php
  $email = "mail@example";

  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      echo 'valid';
  }else{
      echo 'Invalid';
  }


?>