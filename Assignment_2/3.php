<!DOCTYPE html>
<html>
<head>
    <title>Check Range</title>
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

        if (($a >= 40 && $a <= 50 && $b >= 40 && $b <= 50) ||
            ($a >= 50 && $a <= 60 && $b >= 50 && $b <= 60)) {

            echo "<h3>true</h3>";

        } else {
            echo "<h3>false</h3>";
        }
    }
    ?>

</body>
</html>
