<!DOCTYPE html>
<html>
<head>
    <title>Count 'aa'</title>
</head>
<body>

    <h2>Count Occurrences of "aa"</h2>

    <form method="post">
        <label>Enter a String:</label>
        <input type="text" name="str" required>
        <br><br>

        <button type="submit">Count</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $str = $_POST["str"];
        $count = 0;

        for ($i = 0; $i < strlen($str) - 1; $i++) {
            if ($str[$i] == 'a' && $str[$i + 1] == 'a') {
                $count++;
            }
        }

        echo "<h3>Number of 'aa': " . $count . "</h3>";
    }
    ?>

</body>
</html>
