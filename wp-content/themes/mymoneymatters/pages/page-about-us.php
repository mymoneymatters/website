<?php
	/**
	 * Template Name: About Us
	 */

	ob_start();
?>

<?php get_header(); ?>

<div class="jumbotron" style="background-color: #3f7fbf;">
	<img src="<?php echo includes_url("/images/logo2.png"); ?>" class="img-rounded img-responsive center-block"/>
</div>

<div class="page-header" xmlns="http://www.w3.org/1999/html">
	<h1>Welcome</h1>
</div>

<div class="row">

	<div class="col-md-8">
		<p style="line-height: 22px; text-align: justify;">We are a group of 3 married couples with a passion for
			achieving the full potential of ourselves,
			our family and friends. We’ve realised that the correct attitude towards money and personal finance plays a
			crucial role in achieving this. We are therefore studying the wisdom of the world’s most influential
			money-minds for insight into how to organise and plan your personal finances (irrespective of your level of
			affluence) in such a way as to pave your path to the future with certainty, peace and clarity.</p>

		<p style="line-height: 22px; text-align: justify;">None of us are financial planners or experts but we’re all
			passionate about spreading the truth about sound
			financial principles, common money-myths, effective budgeting tools and simple steps towards reaching your
			financial goals – regardless of your current financial situation.</p>

		<p>To register for our next seminar click <a href="registration" target="_blank">here</a>.</p>

		<br/>

		<p><b>My Money Matters seminar will give you:</b></p>

		<ul>
			<li>A revolutionised perspective towards money</li>

			<li>True insights about debt</li>

			<li>Simple steps towards reaching your financial goals</li>

			<li>Effective budgeting principles and methods</li>

			<!--			<li>Financial peace</li>-->
		</ul>

		<p><b>You’ll say goodbye to:</b></p>

		<ul>
			<li>Money-fights

			<li>Worry, uncertainty, sleepless nights</li>

			<li>Ignorance about debt and credit</li>

			<li>Having a scarcity mentality</li>

			<li>Not having financial goals</li>

			<li>Not knowing how to reach your goals</li>
		</ul>


		<p><b>We’re not addressing:</b></p>

		<ul>
			<li>Investment products</li>

			<li>How to make money</li>

			<li>Nkandla</li>
		</ul>

		<br/>

		<p><b>Our Team:</b></p>
		<p><img src="<?php echo includes_url("/images/team.jpg"); ?>" class="img-rounded img-responsive center-block"/>
		</p>

	</div>

	<div class="col-md-4">
		<div class="fb-page" data-href="https://www.facebook.com/My-Money-Matters-465152716989695/" data-tabs="timeline" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>
	</div>

</div>

<?php get_footer(); ?>

<?php ob_flush(); ?>
