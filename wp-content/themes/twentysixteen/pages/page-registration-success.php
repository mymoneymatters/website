<?php
	/**
	 * Template Name: Registration Success
	 */
?>

<?php

$to      = 'rnsnkl@gmail.com';
$subject = 'New Registration';
$message = 'Hi, someone has just registered.';
$headers = 'From: My Money Matters <info@mymoneymatters.co.za>' . "\r\n" . 'Reply-To: info@mymoneymatters.co.za';

mail($to, $subject, $message, $headers);

?>

<?php get_header(); ?>

	<div class="alert alert-success" role="alert"><strong>Success!</strong> You have been registered.</div>

	<div class="row">

		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Banking Details</h3>
				</div>
				<div class="panel-body">
					<p>Send proof of payment to: mymoneyseminar@gmail.com</p>
					<p>NB: Please use "MMM May " + your name & surname as reference</p>
					<p>Standard Bank 271531657</p>
					<p>Branch: Centurion (012645)</p>
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Fees</h3>
				</div>
				<div class="panel-body">
					<p>R595 per person / R1095 per couple</p>
					<p>Early bird registration (before 20 April 2016)</p>
					<p>R395 per person / R695 per couple</p>
				</div>
			</div>
		</div>

	</div>

<?php get_footer(); ?>