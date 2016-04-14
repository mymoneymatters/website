<?php
	/**
	 * Template Name: Testimonials
	 */

	ob_start();
?>

<?php get_header(); ?>

<div class="page-header">
	<h1>Coming Soon
	</h1>
</div>

<div class="row">

	<div class="col-md-8">
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
