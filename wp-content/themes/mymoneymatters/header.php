<!DOCTYPE html>

<html>

<head>
	<title>
		<?php if (basename(get_permalink()) === 'www.mymoneymatters.co.za'): echo 'MyMoneyMatters - Home'; endif ?>
		<?php if (basename(get_permalink()) === 'registration'): echo 'MyMoneyMatters - Registration'; endif ?>
		<?php if (basename(get_permalink()) === 'testimonials'): echo 'MyMoneyMatters - Testimonials'; endif ?>
		<?php if (basename(get_permalink()) === 'contact-us'): echo 'MyMoneyMatters - Contact Us'; endif ?>
		<?php if (basename(get_permalink()) === 'management'): echo 'MyMoneyMatters - Dashboard'; endif ?>
	</title>

	<!--Bootstrap Dependencies-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!--/Bootstrap Dependencies-->

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
					<li class="<?php echo(basename(get_permalink()) === 'registration' ? 'active' : ''); ?>">
						<a href="registration">Registration</a>
					</li>
					<li class="<?php echo(basename(get_permalink()) === 'testimonials' ? 'active' : ''); ?>">
						<a href="testimonials">Testimonials</a>
					</li>
					<li class="<?php echo(basename(get_permalink()) === 'contact-us' ? 'active' : ''); ?>">
						<a href="contact-us">Contact Us</a>
					</li>
				</ul>

			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
