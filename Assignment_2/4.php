<!DOCTYPE html>
<html>
<head>
    <title>Convert Last 3 Characters</title>
</head>
<body>

    <h2>Enter a String</h2>

    <form method="post">
        <label>String:</label>
        <input type="text" name="str" required>
        <br><br>

        <button type="submit">Convert</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $str = $_POST["str"];

        if (strlen($str) < 3) {
            echo "<h3>Result: " . strtoupper($str) . "</h3>";
        } else {
            echo "<h3>Result: " .
                substr($str, 0, -3) .
                strtoupper(substr($str, -3)) .
                "</h3>";
        }
    }
    ?>

</body>
</html>
