<?php

$str = readline("Enter a string: ");

$count = 0;

for ($i = 0; $i < strlen($str) - 1; $i++) {
    if ($str[$i] == 'a' && $str[$i + 1] == 'a') {
        $count++;
    }
}

echo "Number of 'aa': " . $count;

?>