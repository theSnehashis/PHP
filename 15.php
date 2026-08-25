<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Grade</title>
</head>
<body>
	<h2>Calculate Student Grade</h2>
	<form method="post">
		<label for="marks">Enter marks (out of 1000):</label>
		<input type="number" id="marks" name="marks" min="0" max="1000" required>
		<button type="submit">Calculate</button>
	</form>

	<?php
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$marks = filter_input(INPUT_POST, 'marks', FILTER_VALIDATE_INT);

		if ($marks === false || $marks === null || $marks < 0 || $marks > 1000) {
			echo '<p>Please enter marks between 0 and 1000.</p>';
		} elseif ($marks > 800) {
			echo '<p>Class I</p>';
		} elseif ($marks > 600) {
			echo '<p>Class II</p>';
		} elseif ($marks >= 400) {
			echo '<p>Class III</p>';
		} else {
			echo '<p>Fail</p>';
		}
	}
	?>
</body>
</html>
