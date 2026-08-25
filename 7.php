<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    echo "The page is called from HTTPS.";
} else {
    echo "The page is called from HTTP.";
}
?>