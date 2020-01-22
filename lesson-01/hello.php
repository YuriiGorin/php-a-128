<!DOCTYPE html>
<html>
<head>
	<title>Привет, мир!</title>
	<meta charset="utf-8">
	<?php
		$hour = date("G");
		if ($hour > 20 || $hour < 8) {
			$color = "#fff";
			$bg = "#333";
		} else {
			$color = "#333";
			$bg = "#fff";
		}
	?>
	<style>
		body {
			background: <?php echo $bg; ?> ;
			color: <?php echo $color; ?>;
			padding: 25px;
		}
	</style>
</head>
<body>
	<h1>Привет, мир!</h1>
	<?php
		// пример динамической вставки
		$n = mt_rand(0, 3);

		if ($n === 0) {
			echo "<h2>Hello World</h2>";
		} else if ($n === 1) {
			echo "<h3>Hola Mundo!</h3>";
		} else if ($n === 2) {
			echo "Hallo Welt";
		} else {
			echo "Привет, мир!";
		}
	?>
</body>
</html>