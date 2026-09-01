<!DOCTYPE html>
<html>
<head>
    <title>String Concatenation</title>
</head>
<body>

    <h2>Compare and Concatenate Strings</h2>

    <form method="post">
        <label>Enter first string:</label>
        <input type="text" name="str1" required>
        <br><br>

        <label>Enter second string:</label>
        <input type="text" name="str2" required>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $str1 = $_POST["str1"];
        $str2 = $_POST["str2"];

        if (strlen($str1) > strlen($str2)) {
            $long = $str1;
            $short = $str2;
        } else {
            $long = $str2;
            $short = $str1;
        }

        $result = $long . $short . $long;

        echo "<h3>Result: " . htmlspecialchars($result) . "</h3>";
    }
    ?>

</body>
</html>
