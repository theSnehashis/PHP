<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Even or Odd</title>
</head>
<body>
	<h2>Check Whether a Number is Even or Odd</h2>
	<form method="post">
		<label for="number">Enter a number:</label>
		<input type="number" id="number" name="number" step="1" required>
		<button type="submit">Check</button>
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['number'])) {
		$number = (int) $_POST['number'];
		$result = $number % 2 === 0 ? 'even' : 'odd';
		echo '<p>' . htmlspecialchars((string) $number, ENT_QUOTES, 'UTF-8') . ' is ' . $result . '.</p>';
	}
	?>
</body>
</html>
