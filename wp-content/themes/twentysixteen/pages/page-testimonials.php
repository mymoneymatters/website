<?php
	/**
	 * Template Name: Testimonials
	 */

	ob_start();
?>

<?php get_header(); ?>

<div class="page-header">
	<h1>Your Feedback Matters</h1>
</div>

<div class="row">

	<div class="col-md-8" style="text-align: justify;">
		<p><i>"The My Money Matters seminar was very insightful. It gave me hope and encouraged me to stay positive about my finances and renewed the way I think about money. Thank you!"</i></p>
		<br />
		<p><i>"Thank you for the insightful information regarding debt! You guys are professional and I can highly recommend this to anyone."</i></p>
		<br />
		<p><i>"It was motivating, inspiring and eye opening. I found the additional tools you recommended for budgeting very helpful. The food was delicious!"</i></p>
		<br />
		<p><i>"What an insightful seminar! Thank you My Money Matters for providing me with inspiring information regarding my personal finances, leaving me with a new perspective towards money!"</i></p>
		<br />
		<p><i>"This was life changing, enjoyable and awesome!"</i></p>
		<br />
		<p><i>"Excellent, excellent, excellent! Thank you! (The food was also great!)"</i></p>
		<br />
		<p><i>"The seminar was thorough, professional and exciting! You provided me with excitement to take control of my money!"</i></p>
		<br />
		<p><i>"Baie dankie vir die eenvoudige manier waarop julle hierdie fundamentele finansiële inligting aan ons gekommunikeer het. Dit het my laat dink oor my visie en siening oor my finansies. Ek besef net weer hoe maklik mens ‘n slaaf kan word van geld. Dankie vir die insiggewende statistieke, praktiese benadering en handige “tools” om die nodige dissipline toe te pas."</i></p>
		<br />
		<p><i>"The seminar was informative, easy to understand and inspiring!"</i></p>
		<br />
		<p>Interested? Register <a href="registration" target="_blank">here</a>.</p>
	</div>

	<div class="col-md-4">
		<div class="fb-page" data-href="https://www.facebook.com/My-Money-Matters-465152716989695/" data-tabs="timeline" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"></div>
	</div>
</div>

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
