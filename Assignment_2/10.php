<!DOCTYPE html>
<html>
<head>
    <title>Left Rotation of Array</title>
</head>
<body>

    <h2>Left Rotate an Array</h2>

    <form method="post">
        <label>Enter 4 integers separated by spaces:</label>
        <input type="text" name="input" required>
        <br><br>

        <button type="submit">Rotate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $input = $_POST["input"];
        $array = preg_split('/\s+/', trim($input));

        $first = array_shift($array);
        $array[] = $first;

        echo "<h3>Array after left rotation:</h3>";
        echo implode(" ", $array);
    }
    ?>

</body>
</html>
