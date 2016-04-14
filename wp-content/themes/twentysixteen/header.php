<?php
	/**
	 * The template for displaying the header
	 *
	 * Displays all of the head element and everything up until the "site-content" div.
	 *
	 * @package WordPress
	 * @subpackage Twenty_Sixteen
	 * @since Twenty Sixteen 1.0
	 */

?>

<html>

<head>
	<title>
		<?php if (basename(get_permalink()) === 'www.mymoneymatters.co.za'): echo 'MyMoneyMatters - Home'; endif ?>
		<?php if (basename(get_permalink()) === 'about-us'): echo 'MyMoneyMatters - About Us'; endif ?>
		<?php if (basename(get_permalink()) === 'testimonials'): echo 'MyMoneyMatters - Testimonials'; endif ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
</head>

<body>

<div class="container" style="padding: 10px;">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">My Money Matters</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="<?php echo(basename(get_permalink()) === 'about-us' ? 'active' : ''); ?>">
						<a href="about-us">About Us</a>
					</li>
					<li class="<?php echo(basename(get_permalink()) === 'testimonials' ? 'active' : ''); ?>">
						<a href="testimonials">Testimonials</a>
					</li>
				</ul>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
