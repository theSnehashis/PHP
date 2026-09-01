<!DOCTYPE html>
<html>
<head>
    <title>Compare Integers</title>
</head>
<body>

    <h2>Enter Two Integers</h2>

    <form method="post">
        <label>First Integer:</label>
        <input type="number" name="a" required>
        <br><br>

        <label>Second Integer:</label>
        <input type="number" name="b" required>
        <br><br>

        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $a = $_POST["a"];
        $b = $_POST["b"];

        if ($a == $b) {
            echo "<h3>Result: 0</h3>";
        } elseif (abs(100 - $a) < abs(100 - $b)) {
            echo "<h3>Result: $a</h3>";
        } else {
            echo "<h3>Result: $b</h3>";
        }
    }
    ?>

</body>
</html>
