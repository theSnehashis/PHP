<?php
$values = [
	'Name' => 'Snehashis',
	'Course' => 'PHP',
	'Year' => 2025,
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>String and Values</title>
</head>
<body>
	<table border="1" cellpadding="8" cellspacing="0">
		<tr>
			<th>String</th>
			<th>Value</th>
		</tr>
		<?php foreach ($values as $string => $value): ?>
			<tr>
				<td><?= htmlspecialchars($string, ENT_QUOTES, 'UTF-8') ?></td>
				<td><?= htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8') ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>
