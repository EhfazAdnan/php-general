<?php
   $current_file_name = basename($_SERVER['PHP_SELF']);
   echo $current_file_name;
   echo "<br/>";

   // domain name
   $url = 'https://stackoverflow.com/questions/23084967/how-to-get-browser-name-version';
   $url = parse_url($url);
   echo 'Host : ' . $url['host'];
   echo "<br/>";

   // current path
   echo 'Path : ' . $url['path'];

?>