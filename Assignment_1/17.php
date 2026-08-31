<?php
$errors = [];
$success = false;
$fullName = $dob = $email = $mobile = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fullName = trim($_POST['full_name'] ?? '');
	$dob = $_POST['dob'] ?? '';
	$email = trim($_POST['email'] ?? '');
	$mobile = trim($_POST['mobile'] ?? '');

	if (count(preg_split('/\s+/', $fullName, -1, PREG_SPLIT_NO_EMPTY)) !== 2) {
		$errors[] = 'Full name must contain exactly two words.';
	}

	$birthDate = DateTime::createFromFormat('Y-m-d', $dob);
	$validDob = $birthDate && $birthDate->format('Y-m-d') === $dob;
	if (!$validDob || $birthDate->diff(new DateTime('today'))->y < 18) {
		$errors[] = 'You must be at least 18 years old.';
	}

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors[] = 'Please enter a valid email address.';
	}

	if (!preg_match('/^\d{10}$/', $mobile)) {
		$errors[] = 'Mobile number must be exactly 10 digits.';
	}

	if (!isset($_POST['terms'])) {
		$errors[] = 'You must agree to the terms and conditions.';
	}

	$success = empty($errors);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Registration</title>
</head>
<body>
	<h1>User Registration</h1>

	<?php if ($success): ?>
		<p style="color: green;">Successful registration</p>
	<?php elseif ($errors): ?>
		<div style="color: red;">
			<?php foreach ($errors as $error): ?>
				<p><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>

	<form method="post" action="">
		<label>Full name (two words):
			<input type="text" name="full_name" value="<?= htmlspecialchars($fullName, ENT_QUOTES, 'UTF-8') ?>" required>
		</label><br><br>

		<label>Date of birth:
			<input type="date" name="dob" value="<?= htmlspecialchars($dob, ENT_QUOTES, 'UTF-8') ?>" required>
		</label><br><br>

		<label>Email ID:
			<input type="email" name="email" value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>" required>
		</label><br><br>

		<label>Mobile:
			<input type="tel" name="mobile" pattern="[0-9]{10}" value="<?= htmlspecialchars($mobile, ENT_QUOTES, 'UTF-8') ?>" required>
		</label><br><br>

		<label>
			<input type="checkbox" name="terms" value="1" <?= isset($_POST['terms']) ? 'checked' : '' ?> required>
			I agree to the terms and conditions
		</label><br><br>

		<button type="submit">Register</button>
	</form>
</body>
</html>
