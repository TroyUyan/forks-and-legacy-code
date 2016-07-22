<?php
	$level = "";
	$htmltitle = "Home";
	include $level . 'inc/header.inc.php';
?>

	<?php pw(); ?>

		<?php pagetitle("Dynamic Web Systems and Responsive Website Developer"); ?>

		<?php col(); ?>
			<h3>The Person</h3>
			<p>Hi there, I'm Troy! A creative and quirky individual that's passionate about all things web and graphic related.</p>
			<p>And enjoys the company of pizza.</p>
		<?php ecol(); ?>

		<?php col(); ?>
			<h3>The Code</h3>
			<p>From scratch-built content management systems to dynamic user interfaces, I enjoy the challenges and puzzles that are created when you design with code.</p>
			<p>I &hearts; PHP, SQL, SaSS, HTML5, jQuery</p>
		<?php ecol(); ?>

		<?php blockquote("Beautiful applications start with beautiful code", "Troy Uyan");?>

		<?php col(); ?>
			<h3>The Goal</h3>
			<p>One might say the end goal is a happy client, I differ from that thought. The end goal should be an amazing user experience.</p>
			<p>In my mind it is the <em>users</em> that bring a website to life, and they should be rewarded for doing so!</p>
		<?php ecol(); ?>

		<?php col(); ?>
			<h3>The Philosophy</h3>
			<p>Smarter, not harder! I'm a firm believer in the "don't repeat yourself" rule, but that's a concept.</p>
			<p>Writing a PHP script that outputs a dynamic HTML page ten times as long? Now that's a well-coded functions file.</p>
		<?php ecol(); ?>

	<?php epw(); ?>
	
<?php 
	include $level . 'inc/footer.inc.php';
?>