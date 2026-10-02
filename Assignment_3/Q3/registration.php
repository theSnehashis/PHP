<?php

$username = "";
$email = "";
$gender = "";
$mobile = "";
$country = "";

$usernameError = "";
$emailError = "";
$genderError = "";
$mobileError = "";
$countryError = "";
$passwordError = "";
$confirmPasswordError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Username validation
    $username = trim($_POST["username"]);

    if (empty($username)) {
        $usernameError = "* Username is required";
    } elseif (!preg_match("/^[a-zA-Z0-9 ]+$/", $username)) {
        $usernameError = "* Username should contain only alphanumeric characters and spaces";
    }

    // Email validation
    $email = trim($_POST["email"]);

    if (empty($email)) {
        $emailError = "* Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "* Invalid email format";
    }

    // Gender validation
    if (empty($_POST["gender"])) {
        $genderError = "* Please select gender";
    } else {
        $gender = $_POST["gender"];
    }

    // Mobile validation
    $mobile = trim($_POST["mobile"]);

    if (empty($mobile)) {
        $mobileError = "* Mobile number is required";
    } elseif (!preg_match("/^\+?[0-9]+$/", $mobile)) {
        $mobileError = "* Mobile number must be numeric and may contain + symbol";
    }

    // Country validation
    if (empty($_POST["country"])) {
        $countryError = "* Please select country";
    } else {
        $country = $_POST["country"];
    }

    // Password validation
    $password = $_POST["password"];

    if (empty($password)) {
        $passwordError = "* Password is required";
    } elseif (strlen($password) < 8) {
        $passwordError = "* Password must be at least 8 characters long";
    }

    // Confirm password validation
    $confirmPassword = $_POST["confirm_password"];

    if (empty($confirmPassword)) {
        $confirmPasswordError = "* Confirm password is required";
    } elseif ($password != $confirmPassword) {
        $confirmPasswordError = "* Passwords do not match";
    }
}

?>

<!DOCTYPE html>
<html>
<head>

    <title>Question 3 - Registration Validation</title>

    <style>
        .error {
            color: red;
        }

        label {
            display: inline-block;
            width: 150px;
        }
    </style>

</head>

<body>

<h2>Registration Form</h2>

<form method="post" action="">

    <label>Username:</label>

    <input type="text" name="username"
           value="<?php echo htmlspecialchars($username); ?>">

    <span class="error">
        <?php echo $usernameError; ?>
    </span>

    <br><br>


    <label>Email:</label>

    <input type="text" name="email"
           value="<?php echo htmlspecialchars($email); ?>">

    <span class="error">
        <?php echo $emailError; ?>
    </span>

    <br><br>


    <label>Gender:</label>

    <input type="radio" name="gender" value="m"
        <?php if ($gender == "m") echo "checked"; ?>> Male

    <input type="radio" name="gender" value="f"
        <?php if ($gender == "f") echo "checked"; ?>> Female

    <input type="radio" name="gender" value="o"
        <?php if ($gender == "o") echo "checked"; ?>> Other

    <span class="error">
        <?php echo $genderError; ?>
    </span>

    <br><br>


    <label>Mobile No:</label>

    <input type="text" name="mobile"
           value="<?php echo htmlspecialchars($mobile); ?>">

    <span class="error">
        <?php echo $mobileError; ?>
    </span>

    <br><br>


    <label>Country:</label>

    <select name="country">

        <option value="">Select Country</option>

        <option value="India"
            <?php if ($country == "India") echo "selected"; ?>>
            India
        </option>

        <option value="USA"
            <?php if ($country == "USA") echo "selected"; ?>>
            USA
        </option>

        <option value="UK"
            <?php if ($country == "UK") echo "selected"; ?>>
            UK
        </option>

        <option value="Canada"
            <?php if ($country == "Canada") echo "selected"; ?>>
            Canada
        </option>

        <option value="Australia"
            <?php if ($country == "Australia") echo "selected"; ?>>
            Australia
        </option>

    </select>

    <span class="error">
        <?php echo $countryError; ?>
    </span>

    <br><br>


    <label>Password:</label>

    <input type="password" name="password">

    <span class="error">
        <?php echo $passwordError; ?>
    </span>

    <br><br>


    <label>Confirm Password:</label>

    <input type="password" name="confirm_password">

    <span class="error">
        <?php echo $confirmPasswordError; ?>
    </span>

    <br><br>


    <input type="checkbox" name="terms">

    I agree to the terms and condition

    <br><br>


    <input type="submit" value="Submit">

</form>

</body>
</html>