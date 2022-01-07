<?php
   // ip from share internet
   if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip_address = $_SERVER['HTTP_CLIENT_IP'];
   }
   // ip from proxy
   elseif(!empty($_SERVER['HTTP_X_FORWARED_FOR'])){
      $ip_address = $_SERVER['HTTP_CLIENT_IP'];
   }
   // ip from remote address
   else{
       $ip_address = $_SERVER['REMOTE_ADDR'];
   }

   echo $ip_address;
   echo "<br/>";
   echo "Your browser is :" . $_SERVER['HTTP_USER_AGENT'];

   $mybrowser = get_browser(null, true);

   echo "<pre>";
   print_r($mybrowser);
   echo "</pre>";

?>