<?php

$str1 = readline("Enter a string of length 4: ");
$str2 = readline("Enter the string to insert: ");

$result = substr($str1, 0, 2) . $str2 . substr($str1, 2);

echo "Result: " . $result;

?>