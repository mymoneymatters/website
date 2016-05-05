<?php
	/**
	 * Template Name: Registration Success
	 */
?>

<?php

	global $wpdb;

	if ($wpdb->get_results("SELECT * FROM mmm_registration WHERE admin_notified=0")) {

		$to = 'mymoneyseminar@gmail.com';
		$subject = 'New Registration';
		$message = 'Hi, someone has just registered.';

		$headers = 'From: My Money Matters <info@mymoneymatters.co.za>\r\n';
		$headers .= 'Reply-To: info@mymoneymatters.co.za\r\n';
		$headers .= 'Bcc: rnsnkl@gmail.com\r\n';

		mail($to, $subject, $message, $headers);

		$wpdb->query("UPDATE mmm_registration SET admin_notified=1");
	}

?>

<?php get_header(); ?>

	<div class="alert alert-success" role="alert"><strong>Success!</strong> You have been registered.</div>

	<div class="row">

		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Seminar Details</h3>
				</div>
				<div class="panel-body">
					<p>Saturday, 28 May 2016</p>
					<p>Oosterlig NG Church</p>
					<p>08h00 - 16h00</p>
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