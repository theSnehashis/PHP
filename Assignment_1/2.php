<!DOCTYPE html>
<html>
<head>
    <title>User Name Form</title>
</head>
<body>

<form method="post" action="">
    <label>Enter your name:</label>
    <input type="text" name="username" required>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['username'])) {
    echo "Hello, " . $_POST['username'];
}
?>

</body>
</html>
