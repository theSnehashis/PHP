<?php

$a = readline("Enter first integer: ");
$b = readline("Enter second integer: ");
$c = readline("Enter third integer: ");

if (($a >= 20 && $a <= 50) || 
    ($b >= 20 && $b <= 50) || 
    ($c >= 20 && $c <= 50)) {
    echo "true";
} else {
    echo "false";
}

?>
