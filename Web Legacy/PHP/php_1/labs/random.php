<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style type="text/css" title="text/css" media="all">
		body {font-family: Verdana;}
		#pagewrapper {width: 600px;margin: 0 auto;font-size: 0.9em;}
		label {clear:both; float:left; width:100px;color: red;}
	</style>

</head>


<body>
	<div id="pagewrapper">
		
		<?php

		$first = "Troy";
		$last = "Uyan";

		echo "<p>My name is $first $last</p>";

		$fuelperlap = 1.3;
		$racetime = 45;
		$avglaptime = 93.432;


		$fuelneeded = (($racetime*60) / $avglaptime) * $fuelperlap;


		echo "<p>You need $fuelneeded liters for this race.</p>";

		
		?><!--end php-->

		<?php 

		$color = "red";
		switch ($color) {
			case 'blue':
				echo "the car is blue";
				break;

			case 'red':
				echo "the car is red";
				break;
		}
		 ?>

	</div>
</body>
</html>



