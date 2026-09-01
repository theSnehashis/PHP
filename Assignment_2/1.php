<!DOCTYPE html>
<html>
<head>
    <title>Check Integers</title>
</head>
<body>

    <h2>Enter Three Integers</h2>

    <form method="post">
        <label>First Integer:</label>
        <input type="number" name="a" required>
        <br><br>

        <label>Second Integer:</label>
        <input type="number" name="b" required>
        <br><br>

        <label>Third Integer:</label>
        <input type="number" name="c" required>
        <br><br>

        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $a = $_POST["a"];
        $b = $_POST["b"];
        $c = $_POST["c"];

        if (($a >= 20 && $a <= 50) || 
            ($b >= 20 && $b <= 50) || 
            ($c >= 20 && $c <= 50)) {

            echo "<h3>true</h3>";

        } else {
            echo "<h3>false</h3>";
        }
    }
    ?>

</body>
</html>
