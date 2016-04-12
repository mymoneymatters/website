<?php
	/**
	 * Template Name: Management
	 *
	 * This is the template that displays all pages by default.
	 * Please note that this is the WordPress construct of pages and that
	 * other "pages" on your WordPress site will use a different template.
	 *
	 * @package WordPress
	 * @subpackage Twenty_Sixteen
	 * @since Twenty Sixteen 1.0
	 */

	ob_start();
?>

<?php

	if (!is_user_logged_in()) {
		header("Location: /wp-admin");
		die();
	}

?>

<?php get_header(); ?>

<?php
	global $wpdb;
	$registrations = $wpdb->get_results("select * from mmm_registration", ARRAY_A);
?>

	<div class="page-header">
		<h1>Management
			<small>Registrations</small>
		</h1>
	</div>

	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th>Registered</th>
			<th>Name</th>
			<th>Surname</th>
			<th>Email Address</th>
			<th>Physical Address</th>
			<th>Marital Status</th>
			<th>Language Preference</th>
			<th>Interests</th>
			<th>Dietary Requirements</th>
			<th>Refered by</th>
			<th>Paying for</th>
		</tr>
		</thead>
		<tbody>

		<?php foreach ($registrations as $registration): ?>

			<?php
			$interests = [];
			$registration['interests'] & 1 ? $interests[] = 'Debt to Debt Management' : null;
			$registration['interests'] & 2 ? $interests[] = 'Wealth' : null;
			$registration['interests'] & 4 ? $interests[] = 'Budgeting' : null;
			$registration['interests'] & 8 ? $interests[] = 'Retirement' : null;
			$registration['interests'] & 16 ? $interests[] = 'Investment' : null;
			$registration['interests'] & 32 ? $interests[] = 'Personal Finance' : null;
			$registration['interests'] & 64 ? $interests[] = 'Saving' : null;

			$dietary_requirements = [];
			$registration['dietary_requirements'] & 1 ? $dietary_requirements[] = 'Vegetarian' : null;
			$registration['dietary_requirements'] & 2 ? $dietary_requirements[] = 'Gluten-free' : null;
			$registration['dietary_requirements'] & 4 ? $dietary_requirements[] = 'Dairy-free' : null;
			$registration['dietary_requirements'] & 8 ? $dietary_requirements[] = 'No Pork' : null;
			$registration['dietary_requirements'] & 16 ? $dietary_requirements[] = 'No Nuts' : null;

			$referer = [];
			$registration['referer'] & 1 ? $referer[] = 'Word of Mouth' : null;
			$registration['referer'] & 2 ? $referer[] = 'Online' : null;
			$registration['referer'] & 4 ? $referer[] = 'Other' : null;
			?>

			<tr>
				<td><?= date('Y/m/d', $registration['created']) ?></td>
				<td><?= htmlspecialchars($registration['name_first']) ?></td>
				<td><?= htmlspecialchars($registration['name_last']) ?></td>
				<td><?= htmlspecialchars($registration['email_address']) ?></td>
				<td><?= htmlspecialchars($registration['physical_address']) ?></td>
				<td><?= htmlspecialchars($registration['marital_status']) ?></td>
				<td><?= htmlspecialchars($registration['language_preference']) ?></td>
				<td><?= implode(', ', $interests) ?></td>
				<td><?= implode(', ', $dietary_requirements) ?></td>
				<td><?= implode(', ', $referer) ?></td>
				<td><?= htmlspecialchars($registration['paying']) ?></td>
			</tr>

		<?php endforeach ?>

		</tbody>
	</table>

<?php get_footer(); ?>

<?php ob_flush(); ?>
