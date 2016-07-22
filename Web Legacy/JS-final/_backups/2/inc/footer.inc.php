	</div><!--end content-->
	<ul class="sm sm-blue">
		<li><a href="http://www.troyuyan.com">&copy; Troy Uyan</a></li>
		<li><a href="#" id="fontplus">Font <i class="fa fa-fw fa-plus"></i></a></li>
		<li><a href="#" id="fontminus">Font <i class="fa fa-fw fa-minus"></i></a></li>
	</ul><!--end footer nav-->
</div><!--end pagewrapper-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/jquery.smartmenus.min.js"></script>
<?php 
	if ($htmlTitle == "Highcharts") {
		echo '<script src="http://code.highcharts.com/highcharts.js"></script>' . "\n";
		echo '<script src="http://code.highcharts.com/modules/exporting.js"></script>' . "\n";
		echo '<script src="js/charts.js"></script>' . "\n";
	} elseif ($htmlTitle == "Form") {
		echo '<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>' . "\n";
	} elseif ($htmlTitle == "Gallery") {
		echo '<script src="js/lightbox.min.js"></script>' . "\n";
	}
?>
<script src="js/troy.js"></script>
</body>
</html>