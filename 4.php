<?php

$str = readline("Enter a string: ");

if (strlen($str) < 3) {
    echo strtoupper($str);
} else {
    echo substr($str, 0, -3) . strtoupper(substr($str, -3));
}

?>