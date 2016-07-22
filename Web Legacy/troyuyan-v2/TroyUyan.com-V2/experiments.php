<?php
	$level = "";
	$htmltitle = "Experiments";
	include $level . 'inc/header.inc.php';
?>

	<?php slide("whiteslide"); ?>

		<?php pagetitle("Experiments and Projects"); ?>

		<p class="center">
			<a href="#sports">Sports</a> | <a href="#gaming">Gaming</a> | <a href="#media">Media</a>
		</p>

		<div id="sports"></div>

		<h3 class="center">Sports Experiments</h3>
		<div class="lbumper"></div>

		<?php port("Box Fun: FIFA World Cup 2014 Teams", "Drag and drop a box and watch the others all rearrange around it! The boxes resemble the nations that participated in the 2014 Finals, and are positioned to represent the final finishing order. Teams with more success in history have larger boxes.", "img/previews/wcboxfun.png", "experiments/world-cup-box-fun.php") ?>

		<?php port("Formula 1 Champions Display", "Info and Desc", "preview img URL", "project URL") ?>		

	<?php endslide("endslide") ?>


	<?php slide("blackslide") ?>

		<div id="gaming"></div>

		<h3 class="center">Gaming Stat Displays</h3>
		<div class="lbumper"></div>

		<?php port("Competitive Gaming History", "Info and Desc", "preview img URL", "project URL") ?>

		<?php port("CS:GO Competitive Profile", "<em>Counter-Strike: Global Offensive</em> competitive gaming profile. This page has basic info-graphics and stats related to my CS:GO competitive record and achievements. Fun project for some interface design leg-stretching!", "img/previews/csgopreview.png", "experiments/csgo-profile.php") ?>

	<?php endslide() ?>


	<?php slide("whiteslide") ?>

		<div id="media"></div>

		<h3 class="center">Graphics and Media</h3>
		<div class="lbumper"></div>

		<?php port("Sim Racing Car Skins", "Info and Desc", "preview img URL", "project URL") ?>

		<?php port("Tatar Motorsports Graphics", "Info and Desc", "preview img URL", "project URL") ?>

		<?php port("Graphic Design +", "CMS logos , RIT April 2014 CSGO Bracket , etc", "preview img URL", "project URL") ?>

	<?php endslide() ?>

<?php 
	include $level . 'inc/footer.inc.php';
?>