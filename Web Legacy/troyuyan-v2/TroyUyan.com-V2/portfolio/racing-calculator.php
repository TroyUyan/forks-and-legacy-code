<?php
	$level = "../";
	$htmltitle = "Racing Calculator App";
	include $level . 'inc/header.inc.php';
?>

	<?php slide("whiteslide"); ?>

		<?php pagetitle("Racing Calculator App"); ?>

		<hr><br><h6 class="center">&laquo; <a href="http://racingcalculator.troyuyan.com/" class="live">This app is live! (v2.3)</a> &raquo;</h6><br><hr>

		<p>The racing calculator app is a handy tool for calculating the race fuel needed, pit stop / fuel strategy, and lap count for racing simulators or auto racing.</p>

		<p class="center">
			<a href="#v3">Version 3 (JS)</a> | <a href="#v2">Version 2 (PHP)</a> | <a href="#v1">Version 1 (PY)</a>
		</p>

		<h3 class="center" id="v3">Version 3 - JS Web and Mobile Apps</h3>

		<?php col(); ?>
			<p>Version 3 of the racing calculator app will be an exciting upgrade to a single-page JavaScript app. It will be available on the web and mobile-friendly as <a href="http://racingcalculator.troyuyan.com/">v2 is now</a>, additionally however the plan is to launch it on Android and potentially iOS as well to be downloaded from the app stores!</p>
			<p>Making it available on <strong>desktop web, mobile web, Android Google Play, and iOS App Store</strong>.</p>
			<p>And because the new version will use a client-side solution in JavaScript it will not need to ping the server back and forth and will run entirely locally, making things like <strong>live updating and animations</strong> possible as well!</p>
			<p>Additionally, there are a couple new calculation features coming to give more accurate inputs and outputs along with <strong>dynamic intelligent strategy ideas</strong>.</p>
		<?php ecol(); ?>

		<?php col(); ?>
			<img class="center" src="http://placehold.it/350x550" alt="">
			<p class="center"><em>V3 expected release is Mid-2015</em></p>
		<?php ecol(); ?>

	<?php endslide(); ?>
	<?php slide("blackslide"); ?>

		<h3 class="center clear" id="v2">Version 2 - PHP Web App</h3>
		<div class="center">
			<img src="http://placehold.it/150x250" alt="">
			<img src="http://placehold.it/150x250" alt="">
			<img src="http://placehold.it/150x250" alt="">
		</div>
		<p><a href="http://racingcalculator.troyuyan.com/">Version 2.3 is the current and live version of the app.</a></p>
		<p>Racing Calculator v2 is a mobile-friendly web app and has a clean user interface with large elements to make it easier to use on web and mobile. The input is a simple five-element form with an informative and visual output providing race laps, race time, fuel needed, fuel tanks needed, and a rough fuel strategy.</p>

	<?php endslide(); ?>
	<?php slide("whiteslide"); ?>

		<h3 class="center" id="v1">Version 1 - Python Local CMD</h3>
		<div class="center">
			<img src="img/racingcalculator/v1-1.png" alt="">
			<img src="img/racingcalculator/v1-2.png" alt="">
		</div>
		<p>Ah yes, where it all began! "Version 1" of the racing calculator app was a command-line Python script for my Intro to Programming class at school. It had fuel and lap calculations, with a Boolean idea of how pit stops worked.</p>
		<p>The crux of this one was actually the fact I created my own algorithms for a tire degradation calculator for use in the Race’07 racing simulator. Race’07 gave tire deg / grip in a unique number value system, and after a year of league racing I understood how it worked (usually), so I put my findings into this calculator.</p>
		<p>You can actually <a href="http://racingcalculator.troyuyan.com/v1/racing_calc_v1.py">download the version 1 Python script here</a>! You will also need to install the <a href="https://www.python.org/downloads/">Python 2x IDE</a> however. Maybe you’re better off just using the web-based second version :)</p>

	<?php endslide(); ?>

<?php 
	include $level . 'inc/footer.inc.php';
?>