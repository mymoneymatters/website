<?php
	/**
	 * Template Name: Contact Us
	 */

	ob_start();
?>

<?php get_header(); ?>

<div class="page-header" xmlns="http://www.w3.org/1999/html">
	<h1>Contact Us</h1>
</div>

<div class="row">

	<div class="col-md-4">

		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Contact Details</h3>
			</div>

			<div class="panel-body">
				<p><strong>Email:</strong> <a href="mailto:mymoneyseminar@gmail.com?Subject=Query" target="_top">mymoneyseminar@gmail.com</a>
				</p>
			</div>
		</div>
	</div>

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
				<p>Standard Registration:</p>
				<p><i>R595 per person / R1095 per couple</i></p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>

<?php ob_flush(); ?>
