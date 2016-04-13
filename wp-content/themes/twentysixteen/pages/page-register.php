<?php
	/**
	 * Template Name: Registration
	 */

	ob_start();
?>

<?php

	function validate()
	{
		$results = [];

		if (!$_REQUEST['name_first']) {
			$results['name_first'] = true;
		}

		if (!$_REQUEST['name_last']) {
			$results['name_last'] = true;
		}

		if (!$_REQUEST['email_address']) {
			$results['email_address'] = true;
		}

		if (!filter_var($_REQUEST['email_address'], FILTER_VALIDATE_EMAIL)) {
			$results['email_address'] = true;
		}

		if (!$_REQUEST['paying']) {
			$results['paying'] = true;
		}

		if (!$_REQUEST['disclaimer']) {
			$results['disclaimer'] = true;
		}

		// Validate ReCaptcha
		$request = stream_context_create([
			'http' => [
				'method' => 'POST',
				'header' => 'Content-type: application/x-www-form-urlencoded',
				'content' => http_build_query([
					'secret' => '6LfomRsTAAAAAKC-VxW3_sxsLKnIpp1upuOZr7Xw',
					'response' => $_REQUEST['g-recaptcha-response']
				])
			]
		]);
		$result = json_decode(file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $request), true);

		if (!$result['success']) {
			$results['robot'] = true;
		}

		if (!empty($results)) {
			return $results;
		}

		// Add to db
		global $wpdb;

		$interests = 0 + array_reduce((array)$_REQUEST['interests'], function ($carry, $item) {
				return (int)$carry + (int)$item;
			});

		$dietary_requirements = 0 + array_reduce((Array)$_REQUEST['dietary_requirements'], function ($carry, $item) {
				return (int)$carry + (int)$item;
			});

		$referer = 0 + array_reduce((array)$_REQUEST['referer'], function ($carry, $item) {
				return (int)$carry + (int)$item;
			});

		$wpdb->insert('mmm_registration', [
			'name_first' => $_REQUEST['name_first'],
			'name_last' => $_REQUEST['name_last'],
			'email_address' => $_REQUEST['email_address'],
			'physical_address' => $_REQUEST['physical_address'],
			'marital_status' => $_REQUEST['marital_status'] ? $_REQUEST['marital_status'] : 'Single',
			'language_preference' => $_REQUEST['language_preference'] ? $_REQUEST['language_preference'] : 'English',
			'interests' => (int)$interests,
			'dietary_requirements' => (int)$dietary_requirements,
			'referer' => (int)$referer,
			'paying' => $_REQUEST['paying'] ? $_REQUEST['paying'] : 'Single',
			'created' => time()
		]);

		header("Location: /success");
		die();
	}

	if ($_REQUEST['register']) {
		$results = validate();
	}

?>

<?php get_header(); ?>

<?php if (!empty($results)): ?>
	<div class="alert alert-danger" role="alert"><strong>Whoops!</strong> Please enter all required fields.</div>
<?php endif ?>

<div class="jumbotron" style="background-color: #3f7fbf;">
	<img src="<?php echo includes_url("/images/logo2.png"); ?>" class="img-rounded img-responsive center-block"/>
</div>

<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Next Seminar</h3>
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
				<p>Standard Bank 271531657</p>
				<p>Branch: Centurion (012645)</p>
				<p>Send proof of payment to:
					<a href="mailto:mymoneyseminar@gmail.com?Subject=Proof of Payment" target="_top">mymoneyseminar@gmail.com</a>
				</p>
				<p>NB: Please use "MMM May " + your name & surname as reference</p>
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
				<p>Early Bird Registration (before 20 April 2016):</p>
				<p><i>R395 per person / R695 per couple</i></p>
			</div>
		</div>
	</div>

</div>

<div class="row">
	<div class="col-md-8">

		<div class="panel panel-primary">

			<div class="panel-heading">
				<h3 class="panel-title">Registration Form</h3>
			</div>

			<div class="panel-body">

				<form method="post">
					<input type="hidden" name="register" value="true"/>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group <?= ($results['name_first'] ? 'has-error' : '') ?>">
								<label for="name_first">First Name</label>
								<input type="text" class="form-control" id="name_first" name="name_first" placeholder="First Name" value="<?= htmlspecialchars($_REQUEST['name_first']) ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group <?= ($results['name_last'] ? 'has-error' : '') ?>">
								<label for="name_last">Last Name</label>
								<input type="text" class="form-control" id="name_last" name="name_last" placeholder="Last Name" value="<?= htmlspecialchars($_REQUEST['name_last']) ?>">
							</div>
						</div>
					</div>

					<div class="row">

						<div class="col-md-6">
							<div class="form-group <?= ($results['email_address'] ? 'has-error' : '') ?>">
								<label for="email_address">Email address</label>
								<input type="email" class="form-control" id="email_address" name="email_address" placeholder="Email address" value="<?= htmlspecialchars($_REQUEST['email_address']) ?>">
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label for="physical_address">Physical Address</label>
								<input type="text" class="form-control" id="physical_address" name="physical_address" placeholder="Physical Address" value="<?= htmlspecialchars($_REQUEST['physical_address']) ?>">
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-md-6">
							<div class="form-group">
								<label>Marital Status</label>
								<div class="radio">
									<label>
										<input type="radio" name="marital_status" value="Single" <?= ($_REQUEST['marital_status'] === 'Single' ? 'checked' : '') ?>>
										Single
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="marital_status" value="Relationship" <?= ($_REQUEST['marital_status'] === 'Relationship' ? 'checked' : '') ?>>
										In a Relationship
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="marital_status" value="Married" <?= ($_REQUEST['marital_status'] === 'Married' ? 'checked' : '') ?>>
										Married
									</label>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Language Preference</label>
								<div class="radio">
									<label>
										<input type="radio" name="language_preference" value="English" <?= ($_REQUEST['language_preference'] === 'English' ? 'checked' : '') ?>>
										English
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="language_preference" value="Afrikaans" <?= ($_REQUEST['language_preference'] === 'Afrikaans' ? 'checked' : '') ?>>
										Afrikaans
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Interests (Optional)</label>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interests[]" value="1" <?= (array_search(1, (array)$_REQUEST['interests']) !== false ? 'checked' : '') ?>>
										Debt to Debt Management
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interests[]" value="2" <?= (array_search(2, (array)$_REQUEST['interests']) !== false ? 'checked' : '') ?>>
										Wealth
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interests[]" value="4" <?= (array_search(4, (array)$_REQUEST['interests']) !== false ? 'checked' : '') ?>>
										Budgeting
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interests[]" value="8" <?= (array_search(8, (array)$_REQUEST['interests']) !== false ? 'checked' : '') ?>>
										Retirement
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interests[]" value="16" <?= (array_search(16, (array)$_REQUEST['interests']) !== false ? 'checked' : '') ?>>
										Investment
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interests[]" value="32" <?= (array_search(32, (array)$_REQUEST['interests']) !== false ? 'checked' : '') ?>>
										Personal Finance
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="interests[]" value="64" <?= (array_search(64, (array)$_REQUEST['interests']) !== false ? 'checked' : '') ?>>
										Saving
									</label>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group">
								<label>Dietary Requirements</label>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="dietary_requirements[]" value="1" <?= (array_search(1, (array)$_REQUEST['dietary_requirements']) !== false ? 'checked' : '') ?>>
										Vegetarian
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="dietary_requirements[]" value="2" <?= (array_search(2, (array)$_REQUEST['dietary_requirements']) !== false ? 'checked' : '') ?>>
										Gluten-free
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="dietary_requirements[]" value="4" <?= (array_search(4, (array)$_REQUEST['dietary_requirements']) !== false ? 'checked' : '') ?>>
										Dairy-free
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="dietary_requirements[]" value="8" <?= (array_search(8, (array)$_REQUEST['dietary_requirements']) !== false ? 'checked' : '') ?>>
										No pork
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="dietary_requirements[]" value="16" <?= (array_search(16, (array)$_REQUEST['dietary_requirements']) !== false ? 'checked' : '') ?>>
										No nuts
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>How did you hear about us?</label>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="referer[]" value="1" <?= (array_search(1, (array)$_REQUEST['referer']) !== false ? 'checked' : '') ?>>
										Word of mouth
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="referer[]" value="2" <?= (array_search(2, (array)$_REQUEST['referer']) !== false ? 'checked' : '') ?>>
										Online
									</label>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" name="referer[]" value="4" <?= (array_search(4, (array)$_REQUEST['referer']) !== false ? 'checked' : '') ?>>
										Other
									</label>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group <?= ($results['paying'] ? 'bg-danger' : '') ?>">
								<label>I will be paying for:</label>
								<div class="radio">
									<label>
										<input type="radio" name="paying" value="Single" <?= ($_REQUEST['paying'] === 'Single' ? 'checked' : '') ?>>
										1 Person
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="paying" value="Couple" <?= ($_REQUEST['paying'] === 'Couple' ? 'checked' : '') ?>>
										2 People
									</label>
								</div>
							</div>

						</div>
					</div>

					<div class="form-group <?= ($results['disclaimer'] ? 'bg-danger' : '') ?>">
						<label>Disclaimer</label>

						<div class="checkbox">
							<label>
								<input type="checkbox" name="disclaimer" value="1" <?= ($_REQUEST['disclaimer'] ? 'checked' : '') ?>>
								I Accept the My Money Matters <a href="/disclaimer" target="_blank">Disclaimer</a>
							</label>
						</div>
					</div>

					<div class="form-group">
						<label>Confirm that you are not a robot</label>
						<?php if ($results['robot']): ?>
							<div class="alert alert-danger" role="alert"><strong>Whoops!</strong> Please confirm
								that you are not a robot.
							</div>
						<?php endif ?>
						<div class="g-recaptcha" data-sitekey="6LfomRsTAAAAACaOTOl9Sv11MS-W-R8PGlkXXxCZ"></div>
					</div>

					<button type="submit" class="btn btn-default">Register</button>
				</form>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="fb-page" data-href="https://www.facebook.com/My-Money-Matters-465152716989695/" data-tabs="timeline" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>
	</div>
</div>

<div class="panel panel-info">
	<div class="panel-heading">
		<h3 class="panel-title">Contact Us</h3>
	</div>

	<div class="panel-body">
		<p><strong>Email:</strong> <a href="mailto:mymoneyseminar@gmail.com?Subject=Query" target="_top">mymoneyseminar@gmail.com</a>
		</p>
	</div>
</div>

<script src='https://www.google.com/recaptcha/api.js'></script>

<div id="fb-root"></div>
<script>(function(d, s, id)
	{
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);
		js.id = id;
		js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

<?php get_footer(); ?>

<?php ob_flush(); ?>
