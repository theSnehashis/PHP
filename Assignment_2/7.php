<!DOCTYPE html>
<html>
<head>
    <title>FizzBuzz String</title>
</head>
<body>

    <h2>FizzBuzz String Checker</h2>

    <form method="post">
        <label>Enter a String:</label>
        <input type="text" name="str" required>
        <br><br>

        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $str = $_POST["str"];

        $startsWithF = substr($str, 0, 1) == "F";
        $endsWithB = substr($str, -1) == "B";

        if ($startsWithF && $endsWithB) {
            echo "<h3>FizzBuzz</h3>";
        } elseif ($startsWithF) {
            echo "<h3>Fizz</h3>";
        } elseif ($endsWithB) {
            echo "<h3>Buzz</h3>";
        } else {
            echo "<h3>" . htmlspecialchars($str) . "</h3>";
        }
    }
    ?>

</body>
</html>
