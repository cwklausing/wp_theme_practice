<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title(); ?></title>
	<!-- This signifies end of head tag to wordpress, loads wp_enqueue functions -->
	<?php wp_head(); ?>
</head>

<body>
<header>
<!-- bloginfo can take parameters about the site -->
<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
<nav>
	<h1><?php bloginfo('name'); ?></h1>
</nav>
</header>