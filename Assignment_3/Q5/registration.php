<!DOCTYPE html>
<html>
<head>
    <title>Q5 - Registration</title>
</head>
<body>

<h2>Registration Form</h2>

<form action="processreg.php" method="post">

    Username:
    <input type="text" name="username" required>
    <br><br>

    Email:
    <input type="email" name="email" required>
    <br><br>

    Gender:
    <input type="radio" name="gender" value="m" required> Male
    <input type="radio" name="gender" value="f"> Female
    <input type="radio" name="gender" value="o"> Other
    <br><br>

    Mobile:
    <input type="text" name="mobile" required>
    <br><br>

    Country:
    <select name="country" required>
        <option value="">Select Country</option>
        <option value="India">India</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="Canada">Canada</option>
        <option value="Australia">Australia</option>
    </select>

    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" value="Register">

</form>

</body>
</html>