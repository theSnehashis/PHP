<?php

$str = readline("Enter a string: ");

$startsWithF = substr($str, 0, 1) == "F";
$endsWithB = substr($str, -1) == "B";

if ($startsWithF && $endsWithB) {
    echo "FizzBuzz";
} elseif ($startsWithF) {
    echo "Fizz";
} elseif ($endsWithB) {
    echo "Buzz";
} else {
    echo $str;
}

?>
