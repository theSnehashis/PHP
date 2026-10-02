<?php

require_once "connect.php";

$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM registration
        WHERE username = ? AND password = ?";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

$stmt->bind_param(
    "ss",
    $username,
    $password
);

$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {

    header("Location: home.php");
    exit();

} else {

    header("Location: login.php");
    exit();

}

?>