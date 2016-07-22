<?php 

// HTML STRUCTURE FUNCTIONS

function port($portTitle, $desc, $imgurl, $porturl) { #end php ?>
		<div class="clear">
			<h4><?php echo $portTitle ?></h4>
			<img src="<?php echo $imgurl ?>" class="floatl" width="150px" height="150px">
			<p><?php echo $desc ?><br><a href="<?php echo $porturl ?>">View Project &raquo;</a></p>
		</div>
	<?php #resume php
}

function slide($slideType) {
	echo "<div class=\"$slideType\">\n";
	echo "<div class=\"pagewrapper\">\n";
}

function endslide() {
	echo "<div class=\"clear\"></div>\n";
	echo "</div><!--end PW-->\n";
	echo "</div><!--end slide-->\n";
}

function pw() {
	echo "<div class=\"pagewrapper\">\n";
}

function epw() {
	echo "</div><!--end PW-->\n";
}

function col() {
	echo "<div class=\"col\">\n";
}

function ecol() {
	echo "</div><!--end column-->\n";
}

function ul($items) {
	echo "<ul>\n";
	foreach ($items as $value) {
		echo "<li>$value</li>\n";
	}
	echo "</ul>\n";
}

function ol($items) {
	echo "<ol>\n";
	foreach ($items as $value) {
		echo "<li>$value</li>\n";
	}
	echo "</ol>\n";
}

function blockquote($q, $cite) { #End PHP ?>
	</div><!--end pw-->
		<blockquote><i class="fa fa-quote-left"></i> <?php echo $q; ?> <i class="fa fa-quote-right"></i><br><cite><?php echo $cite; ?></cite></blockquote>
	<div class="pagewrapper">
<?php #Resume PHP
}

function pagetitle($title_string) {
	echo "<div class=\"pagetitle\">\n";
	echo "<h2>$title_string</h2>\n";
	echo "</div><!--end pagetitle-->\n";
}


# Final End PHP
?>