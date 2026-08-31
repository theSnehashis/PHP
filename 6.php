<?php

$input = readline("Enter array elements separated by spaces: ");
$array = explode(" ", $input);

$num = readline("Enter the number to search: ");

if (in_array($num, $array)) {
    echo "Number is present in the array.";
} else {
    echo "Number is not present in the array.";
}

?>