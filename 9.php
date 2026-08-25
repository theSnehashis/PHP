<?php
$email = $_POST['email'] ?? '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$message = filter_var($email, FILTER_VALIDATE_EMAIL)
		? 'Valid email address.'
		: 'Invalid email address.';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email Validation</title>
</head>
<body>
	<form method="post">
		<label for="email">Enter your email:</label>
		<input type="email" id="email" name="email" required
			   value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>">
		<button type="submit">Check</button>
	</form>

	<?php if ($message): ?>
		<p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>
	<?php endif; ?>
</body>
</html>
