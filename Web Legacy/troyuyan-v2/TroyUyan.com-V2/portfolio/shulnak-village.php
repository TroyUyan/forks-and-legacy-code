<?php
	$level = "../";
	$htmltitle = "Shulnak Village Project";
	include $level . 'inc/header.inc.php';
?>

	<?php slide("whiteslide"); ?>

		<?php pagetitle("Shulnak Village Project"); ?>
		
		<div class="center">
			<img src="img/shulnak/prev-1.png" alt="">
			<img src="img/shulnak/prev-2.png" alt="">
			<img src="img/shulnak/prev-3.png" alt="">
		</div>
		<div class="clear"></div>

		<?php col(); ?>
			<p>I was the <strong>lead developer</strong> on this project.</p>
			<p>I was in charge of creating a responsive framework for the designers to fill with their designs and content, and to handle all of the integration with WordPress. Such as:
				<?php
					$items = ["Custom WordPress Loop","Dynamic Menus", "Blog Roll", "Widget Areas", "Media Gallery"];
					ul($items);
				?>
			</p>
		<?php ecol(); ?>

		<?php col(); ?>
			<p>I had no control of the design and content of the site, and to be honest I'm not too happy with the end result on that front. But to me this project was very important because I was assigned a lead developer role of CMS-based project for a client just <strong>five months</strong> after I wrote my first line of basic HTML.</p>
			<p>The learning curve was quick but easily manageable, and <em>six months</em> after my first line of HTML, I had developed a <strong>responsive WordPress theme</strong> for an NPO.</p>
		<?php ecol(); ?>

		<?php blockquote("[We provide] the resources necessary for students to thrive", "Shulnak Village Project");?>

		<h2 class="center">The Results</h2>

		<?php col(); ?>
			<p>The results of the project were very positive, and the owners were very thankful for our work.</p>
			<p>Actually, during the transfer period from the development environment to their live server the they received their <strong>first ever donation</strong>!</p>
			<p>This was an awesome project, it had everything rolled up into a few week rush; including the client being in China during the initial phases of the project.</p>
		<?php ecol(); ?>

		<?php col(); ?>
			<img src="img/shulnak/fb_ten-times-likes.png" alt="Graphic showing Facebook likes increased 10 times since site launch">
			<p>The <a href="https://www.facebook.com/ShulnakVillage">Facebook page</a> attention has increased substantially as well!</p>
		<?php ecol(); ?>

		<p class="clear">Head over to <a href="http://www.shulnakvillage.org/">ShulnakVillage.org</a> to see the site now, and please <a href="https://www.facebook.com/ShulnakVillage">"like" their Facebook page</a> while your there!</p>
		<p><strong>Note:</strong> At the time of writing the live site had some incorrectly linked images and some sidebar content was missing. These are not representative of the final deliverable.</p>

	<?php endslide(); ?>

<?php 
	include $level . 'inc/footer.inc.php';
?>