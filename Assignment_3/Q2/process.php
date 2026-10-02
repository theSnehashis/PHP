<?php

echo "<h2>Registration Data</h2>";

echo "Username: " . htmlspecialchars($_POST['username']) . "<br>";
echo "Email Address: " . htmlspecialchars($_POST['email']) . "<br>";
echo "Gender: " . htmlspecialchars($_POST['gender']) . "<br>";
echo "Mobile No: " . htmlspecialchars($_POST['mobile']) . "<br>";
echo "Country: " . htmlspecialchars($_POST['country']) . "<br>";
echo "Password: " . htmlspecialchars($_POST['password']) . "<br>";
echo "Confirm Password: " . htmlspecialchars($_POST['confirm_password']) . "<br>";

if (isset($_POST['terms'])) {
    echo "Terms: Accepted";
} else {
    echo "Terms: Not Accepted";
}

?>