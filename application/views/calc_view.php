<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calc</title>
</head>
<body>
	<form method="POST" action="/calc/index">
		<input name="x" type="text">
		<input name="y" type="text">
		<input type="submit">
	</form>
	<pre><?php print_r($calc) ?></pre>
	<pre><?php print_r($POST) ?></pre>
</body>
</html>