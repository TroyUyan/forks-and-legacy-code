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
		$months = array(1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
		$days = range(1, 31);
		$years = range(2011, 2021);

		echo '<select name="month">';
		foreach ($months as $key => $value) {
			echo "<option value=\"$key\">$value</option>\n";
		}
		echo "</select>";

		echo '<select name="day">';
		foreach ($days as $key => $value) {
			echo "<option value=\"$key\">$value</option>\n";
		}
		echo "</select>";

		echo '<select name="year">';
		foreach ($years as $key => $value) {
			echo "<option value=\"$key\">$value</option>\n";
		}
		echo "</select>";

	?>

	</div>
</body>
</html>



