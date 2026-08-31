<?php

$str1 = readline("Enter first string: ");
$str2 = readline("Enter second string: ");

if (strlen($str1) > strlen($str2)) {
    $long = $str1;
    $short = $str2;
} else {
    $long = $str2;
    $short = $str1;
}

echo "Result: " . $long . $short . $long;

?>