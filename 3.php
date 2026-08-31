<?php

$a = readline("Enter first integer: ");
$b = readline("Enter second integer: ");

if (($a >= 40 && $a <= 50 && $b >= 40 && $b <= 50) ||
    ($a >= 50 && $a <= 60 && $b >= 50 && $b <= 60)) {
    echo "true";
} else {
    echo "false";
}

?>