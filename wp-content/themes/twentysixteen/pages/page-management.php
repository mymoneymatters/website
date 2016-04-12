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

	global $wpdb;
	ob_start();
?>

<?php
	if (!is_user_logged_in()) {
		header("Location: /wp-admin");
		die();
	}
?>

<?php
	if (isset($_REQUEST['paid']) && is_array($_REQUEST['paid'])) {
		foreach ($_REQUEST['paid'] as $id => $paid) {
			$wpdb->query("UPDATE mmm_registration SET paid=" . (int)$paid . " WHERE id=" . (int)$id);
		}
	}

	if (isset($_REQUEST['follow_up1_sent']) && is_array($_REQUEST['follow_up1_sent'])) {
		foreach ($_REQUEST['follow_up1_sent'] as $id => $sent) {
			$wpdb->query("UPDATE mmm_registration SET follow_up1_sent=" . (int)$sent . " WHERE id=" . (int)$id);
		}
	}

	if (isset($_REQUEST['paid']) && is_array($_REQUEST['follow_up2_sent'])) {
		foreach ($_REQUEST['follow_up2_sent'] as $id => $sent) {
			$wpdb->query("UPDATE mmm_registration SET follow_up2_sent=" . (int)$sent . " WHERE id=" . (int)$id);
		}
	}

	if (isset($_REQUEST['filter']) && $_REQUEST['filter'] === 'unpaid_selection') {
		$unpaid_selection = $wpdb->get_results("SELECT email_address FROM mmm_registration WHERE paid=0", ARRAY_A);
	}

	if (isset($_REQUEST['filter']) && $_REQUEST['filter'] === 'paid_selection') {
		$unpaid_selection = $wpdb->get_results("SELECT email_address FROM mmm_registration WHERE paid=1", ARRAY_A);
	}
?>

<?php get_header(); ?>

<?php $registrations = $wpdb->get_results("select * from mmm_registration", ARRAY_A); ?>

<div class="page-header">
	<h1>Management
		<small>Registrations</small>
	</h1>
</div>


<?php if ($unpaid_selection) : ?>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">People that havn't paid yet</h3>
		</div>

		<div class="panel-body">
			<?php foreach ($unpaid_selection as $unpaid) : ?>
				<?= $unpaid['email_address'] ?>;
			<?php endforeach ?>
		</div>
	</div>
<?php endif ?>

<form method="post">
	<button type="submit" class="btn btn-default">
		<span class="">Save Changes</span>
	</button>

	<a href="/management?filter=unpaid_selection">Show Unpaid</a>
	<a href="/management?filter=paid_selection">Show Paid</a>
	<a href="/management">Clear</a>

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
			<th>Paid</th>
			<th>Follow up 1</th>
			<th>Follow up 2</th>
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
				<td>
					<input type="hidden" name="paid[<?= $registration['id'] ?>]" value="0"/>
					<input type="checkbox" name="paid[<?= $registration['id'] ?>]" value="1" <?php if ($registration['paid']): ?>checked="checked" <?php endif ?>)/>
				</td>
				<td>
					<input type="hidden" name="follow_up1_sent[<?= $registration['id'] ?>]" value="0"/>
					<input type="checkbox" name="follow_up1_sent[<?= $registration['id'] ?>]" value="1" <?php if ($registration['follow_up1_sent']): ?>checked="checked" <?php endif ?>)/>
				</td>
				<td>
					<input type="hidden" name="follow_up2_sent[<?= $registration['id'] ?>]" value="0"/>
					<input type="checkbox" name="follow_up2_sent[<?= $registration['id'] ?>]" value="1" <?php if ($registration['follow_up2_sent']): ?>checked="checked" <?php endif ?>)/>
				</td>
			</tr>

		<?php endforeach ?>

		</tbody>
	</table>
</form>

<?php get_footer(); ?>

<?php ob_flush(); ?>
