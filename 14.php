<?php
$radius = '';
$circumference = null;
$area = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$radius = trim($_POST['radius'] ?? '');

	if (is_numeric($radius) && (float) $radius >= 0) {
		$radius = (float) $radius;
		$circumference = 2 * pi() * $radius;
		$area = pi() * $radius * $radius;
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Circle Calculator</title>
</head>
<body>
	<h1>Circle Calculator</h1>
	<form method="post">
		<label for="radius">Radius:</label>
		<input type="number" id="radius" name="radius" min="0" step="any"
			   value="<?= htmlspecialchars((string) $radius, ENT_QUOTES, 'UTF-8') ?>" required>
		<button type="submit">Calculate</button>
	</form>

	<?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && $circumference === null): ?>
		<p>Please enter a valid non-negative radius.</p>
	<?php elseif ($circumference !== null): ?>
		<h2>Results</h2>
		<p>Circumference: <?= number_format($circumference, 2) ?></p>
		<p>Area: <?= number_format($area, 2) ?></p>
	<?php endif; ?>
</body>
</html>
