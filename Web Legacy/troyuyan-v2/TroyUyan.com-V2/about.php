<?php
	$level = "";
	$htmltitle = "About";
	include $level . 'inc/header.inc.php';
?>

	<?php slide("whiteslide"); ?>
		<div id="about"></div>
		<?php pagetitle("About Troy Uyan"); ?>

		<p class="center">
			<a href="#about">About</a> | <a href="#stack">Development Stack</a> | Interests
		</p>

		<img src="img/troyuyan_bio.jpg" class="floatl" style="width:30%;min-width:220px;"/>
		<p class="smallclear">I'm Troy! A creative and quirky individual that's passionate about all things web and graphic related.</p>
		<p>And enjoys the company of pizza.</p>
		<p>I started off wanting to be graphic designer, and while finishing my high school credits by taking college classes through a school program, I studied <strong>Graphic Design</strong> and <strong>Art Theory</strong> at the same time.</p>
		<p>The initial degree I was pursuing was a <strong>Graphic and Web Design</strong> degree, which required several basic coding classes as well.</p>
		<p>An HTML and Responsive Web Design class later, I fell in love with code, and I was dead-set on being a <strong>Front-end Developer</strong> instead. And I switched to the <strong>Web Development</strong> degree.</p>
		<p>Then I took PHP with SQL I, and the power server-side programming combined with database design fulfilled the last piece of the puzzle as my attention turned to <strong>Back-end Development</strong>.</p>
		<p>With my previous skills and this new found love I had the abilities to create dynamic web systems and applications, and there was no doubt that was what I wanted to do with my life.</p>

	<?php endslide(); ?>

	<div id="stack"></div>

	<?php slide("greyslide") ?>

		<?php pagetitle("Development Stack"); ?>

		<?php col(); ?>
			<h3>Back-End Development</h3>
			<?php 
				$items = array("PHP: Hypertext Preprocessor", "Database Design", "Structured Query Language", "Apache Web Server Configuration", "Application Development");
				ul($items);
			?>
		<?php ecol(); ?>

		<?php col(); ?>
			<h3>Front-End Development</h3>
			<?php 
				$items = array("HTML5 / CSS3 / SaSS","Responsive Web Design","JavaScript","jQuery","User Interface Design");
				ul($items);
			?>
		<?php ecol(); ?>

		<?php col(); ?>
			<h3>Graphic and Media</h3>
			<?php 
				$items = array("Photoshop","Illustrator","Video Production","Photography","Typography");
				ul($items);
			?>
		<?php ecol(); ?>

		<?php col(); ?>
			<h3>Web Practices</h3>
			<?php 
				$items = array("User Experience Design","User Testing","Web Accessibility","Search Engine Optimization");
				ul($items);
			?>
			<p></p>
		<?php ecol(); ?>

	<?php endslide(); ?>

<?php 
	include $level . 'inc/footer.inc.php';
?>