<?php

@include 'missing_file.php';

$error = error_get_last();

if ($error !== null) {
	echo "Last occurred error:<br>";
	echo "Type: {$error['type']}<br>";
	echo "Message: {$error['message']}<br>";
	echo "File: {$error['file']}<br>";
	echo "Line: {$error['line']}";
} else {
	echo "No errors have occurred.";
}
?>
