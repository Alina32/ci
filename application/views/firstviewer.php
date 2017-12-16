<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Test</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="stylesheet" type="text/css" href="style.css" media="all">
		<style type="text/css">
			div {
				border: 1px solid black;
			}
		</style>
	</head>
	<body>
		<?php foreach ($articles as $article): ?>
			<div>
				<h2><?=$article['title'];?></h2>
				<p><?=$article['description'];?></p>
				<sub><?=$article['date'];?></sub>
			</div>
		<?php endforeach ?>
	</body>
</html>