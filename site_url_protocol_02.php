<?php
  $url = 'https://www.youtube.com/watch?v=_cogTC-RfAg&list=PL9-9CrcmxdyMIVf8zSk33GYIvSmaHX6tr';
  $url = parse_url($url);
  echo 'Schema : ' . $url['scheme'];
  echo "<br/>";

  // check is http or https

  if(!empty($_SERVER['HTTPS'])){
    echo 'HTTPS';
  }else{
    echo 'HTTP';
  }

?>