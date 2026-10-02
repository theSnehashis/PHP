<?php

require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: registration.php");
    exit();
}

$username = $_POST["username"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$mobile = $_POST["mobile"];
$country = $_POST["country"];
$password = $_POST["password"];

$sql = "INSERT INTO registration
        (username, email, gender, mobile, country, password)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param(
    "ssssss",
    $username,
    $email,
    $gender,
    $mobile,
    $country,
    $password
);

if ($stmt->execute()) {

    header("Location: login.php");
    exit();

} else {

    die("Registration failed: " . $stmt->error);

}

?>