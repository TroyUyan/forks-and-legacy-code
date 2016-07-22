	</div><!--end content-->
	<div id="footer" class="clear">
		<div class="pagewrapper">
			<div class="toplink">
				<p><a href="#top">&nbsp;Going Up?</a></p>
			</div>
			<div class="clear"></div>
			<div id="footernav">
				<ul>
					<li><a href="<?php echo $level;?>index.php">Home</a></li>
					<li><a href="<?php echo $level;?>portfolio.php">Portfolio</a></li>
					<li><a href="<?php echo $level;?>experiments.php">Experiments</a></li>
					<li><a href="<?php echo $level;?>about.php">About</a></li>
					<li><a href="<?php echo $level;?>contact.php">Contact</a></li>
				</ul>
			</div>
			
			<div class="social">
				<a href="http://twitter.com/troyuyan" target="_blank"><i class="fa fa-fw fa-twitter"></i></a>&nbsp;&nbsp; <a href="http://github.com/troyuyan" target="_blank"><i class="fa fa-fw fa-github"></i></a>&nbsp;&nbsp;  <a href="<?php echo $level;?>contact.php"><i class="fa fa-fw fa-envelope"></i></a>&nbsp;&nbsp;
			</div>
			
			<div class="clear"></div>
			<p class="copyinfo"><span class="main">&copy;</span> Troy<span class="main">Uyan</span> 2014-2015</p>
		</div><!--end pw-->
	</div><!--end footer-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<?php 

		switch ($htmltitle) {

			case 'Contact':
				echo '<script src="js/form_script.js"></script>' . "\n";
				echo '<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>' . "\n";
				break;
			
			case 'CSGO Profile':
				echo '<script src="../js/csgoprofile.js"></script>' . "\n";
				break;

			case 'World Cup Box Fun':
				echo '<script src="../js/packery.js"></script>' . "\n";
				echo '<script src="../js/draggabilly.js"></script>' . "\n";
				echo '<script src="../js/worldcupboxes.js"></script>' . "\n";
				break;	
					
		} // end switch	
	?>
</body>
</html>