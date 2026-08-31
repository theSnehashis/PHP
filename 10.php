<?php

$input = readline("Enter 4 integers separated by spaces: ");
$array = explode(" ", $input);

$first = array_shift($array);
$array[] = $first;

echo "Array after left rotation: ";

print_r($array);

?>