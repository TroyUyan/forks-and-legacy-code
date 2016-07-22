<?php
	$level = "";
	$htmltitle = "Portfolio";
	include $level . 'inc/header.inc.php';
?>

	<?php slide("whiteslide"); ?>

		<?php pagetitle("Portfolio"); ?>

		<p class="center">
			<a href="#apps">Systems and Apps</a> | <a href="#webdev">Websites</a> | <a href="#media">Media</a>
		</p>

		<div id="apps"></div>

		<h3 class="center">Web Systems and Apps</h3>
		<div class="lbumper"></div>

		<?php port("Employee Training Management System", "Info and Desc", "preview img URL", "project URL") ?>

		<?php port("Racing Calculator App", "The racing calculator app is a handy tool for calculating the race fuel needed, pit stop / fuel strategy, and lap count for racing simulators or auto racing. The web app is desktop and mobile friendly, with Andriod and iOS apps coming soon.", "img/previews/racingcalcpreview.png", "portfolio/racing-calculator.php") ?>

		<?php port("Canasta Calculator and Score Keeper App", "Info and Desc", "preview img URL", "project URL") ?>

		<?php #port("Sim Racing Championship App", "Info and Desc", "preview img URL", "project URL") ?>

	<?php endslide("endslide") ?>


	<?php slide("greyslide") ?>

		<div id="webdev"></div>

		<h3 class="center">Web Development</h3>
		<div class="lbumper"></div>

		<?php port("Vapor Armour Inc.", "Info and Desc", "preview img URL", "project URL") ?>

		<?php port("Elite Care", "Info and Desc", "preview img URL", "project URL") ?>

		<?php port("Childhood Deafness and Hearing Loss", "Info and Desc", "preview img URL", "project URL") ?>

		<?php port("TroyUyan.com", "function based design examples and yatta yatta", "preview img URL", "project URL") ?>

		<?php #port("Tatar Motorsports Racing Team", "Info and Desc", "preview img URL", "project URL") ?>

		<?php port("Shulnak Village Project", "The Shulnak Village School Project is a Non-Profit Organization providing educational support services and supplies in Tibet. They provide lots of educational supplies for teachers and students, and arrange college scholarships.", "img/previews/shulnakpreview.png", "portfolio/shulnak-village.php") ?>

		<?php port("Sonshine School", "Info and Desc", "preview img URL", "project URL") ?>

	<?php endslide() ?>


	<?php slide("whiteslide") ?>

		<div id="media"></div>

		<h3 class="center">Graphics and Media</h3>
		<div class="lbumper"></div>

		<?php port("Grand Prix Winner Icon Set", "Info and Desc", "preview img URL", "project URL") ?>

		<?php port("Documentary: Source Climbing Center", "Info and Desc", "preview img URL", "project URL") ?>

		<?php port("Video Game Cover Re-design", "Info and Desc", "preview img URL", "project URL") ?>

		<?php port("Photography", "Info and Desc // Photography in pics + school class photos, lightbox display", "preview img URL", "project URL") ?>

	<?php endslide() ?>

<?php 
	include $level . 'inc/footer.inc.php';
?>