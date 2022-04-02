<?php
	$title = 'Chris Holder / Design + Development';

	if(!empty($subTitle)) {
		$title = $title . ' / ' . $subTitle;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo $title; ?></title>

		<link rel="stylesheet" id="site-css" href="/style.css" media="all">
	</head>

	<body>
		<header>
			<h1><a href="/">Chris Holder</a></h1>
			<h4>Design + Development</h4>

			<input id="menu-toggle" type="checkbox" />
			<label class='menu-button-container' for="menu-toggle">
				<div class="menu-button">☰</div>
			</label>

			<nav>
				<a href="/#projects">Projects</a>
				<a href="mailto:chrislholder@gmail.com">Email</a>
				<a href="https://instagram.com/chrislholder" target="_blank">Instagram</a>
				<a href="https://github.com/see8ch" target="_blank">Github</a>
				<a href="https://unsplash.com/@chrisholder" target="_blank">Unsplash</a>
				<a href="https://www.linkedin.com/in/chris-holder-7a18a8230/" target="_blank">LinkedIn</a>
			</nav>
		</header>