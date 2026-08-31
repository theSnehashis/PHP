<?php

$a = readline("Enter first integer: ");
$b = readline("Enter second integer: ");

if ($a == $b) {
    echo "0";
} elseif (abs(100 - $a) < abs(100 - $b)) {
    echo $a;
} else {
    echo $b;
}

?>