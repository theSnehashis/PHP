<!DOCTYPE html>
<html>
<head>
    <title>Insert String</title>
</head>
<body>

    <h2>Insert String in the Middle</h2>

    <form method="post">
        <label>Enter a string of length 4:</label>
        <input type="text" name="str1" maxlength="4" required>
        <br><br>

        <label>Enter the string to insert:</label>
        <input type="text" name="str2" required>
        <br><br>

        <button type="submit">Insert</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $str1 = $_POST["str1"];
        $str2 = $_POST["str2"];

        $result = substr($str1, 0, 2) . $str2 . substr($str1, 2);

        echo "<h3>Result: " . htmlspecialchars($result) . "</h3>";
    }
    ?>

</body>
</html>
