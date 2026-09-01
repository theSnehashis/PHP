<!DOCTYPE html>
<html>
<head>
    <title>Search Number in Array</title>
</head>
<body>

    <h2>Search Number in Array</h2>

    <form method="post">
        <label>Enter array elements separated by spaces:</label>
        <input type="text" name="input" required>
        <br><br>

        <label>Enter the number to search:</label>
        <input type="number" name="num" required>
        <br><br>

        <button type="submit">Search</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $input = $_POST["input"];
        $array = explode(" ", $input);

        $num = $_POST["num"];

        if (in_array($num, $array)) {
            echo "<h3>Number is present in the array.</h3>";
        } else {
            echo "<h3>Number is not present in the array.</h3>";
        }
    }
    ?>

</body>
</html>
