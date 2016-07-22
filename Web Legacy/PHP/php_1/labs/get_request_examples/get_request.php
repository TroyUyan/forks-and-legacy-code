<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get Request</title>
</head>
<body>
	Foods:<br>
	<a href="?food=Orange%20and%20Bobby">Orange and Bobby</a><br>
	<a href="?food=Apple%20and%20James">Apple and James</a><br><br>
	Cars:<br>
	<a href="?car=Acura ARX-01 LMP2">Acura ARX-01</a><br>

	<?php
	if (isset($_GET['food'])) {
		echo "<h1>Food: {$_GET['food']}</h1>";}

	if (isset($_GET['car'])) {
		echo "<h1>Car: {$_GET['car']}</h1>";}

	# use http://localhost/labs/get_request_examples/get_request.php?food=3&car=acura URL to display info
	?>


</body>
</html>