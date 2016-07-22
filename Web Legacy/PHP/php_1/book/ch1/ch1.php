<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php
		echo "<p><b>Coder:</b> Hello World!<br/><b>World:</b> Hey Buddy, wazzup?</p>";
		#hold on there buddy boi!
	?><!--end php-->

	<?php
		$file = $_SERVER['SCRIPT_FILENAME'];
		$user = $_SERVER["HTTP_USER_AGENT"];
		$server = $_SERVER["SERVER_SOFTWARE"];

		echo "<p>You are viewing <b>$file</b>.</p>";
		echo "<p>You are using <b>$user</b>.</p>";
		echo "<p>This server is running <b>$server</b></p>";
	?><!--end php-->

	<?php
		$first = "Troy";
		$last = "Uyan";
		$movie = "RUSH";
		echo "I found out that $first $last's favorite movie was <em>$movie</em>.";
		$full_name = $last . ", " . $first;
		echo "<p>$full_name</p>";
	?>

	<?php
	# num formats
		$pi = 3.1432432562343624532;
		$pi_sm = round($pi, 2);
		echo $pi_sm;

		$money = 43554;
		echo "<p>$" . number_format($money,2) . "</p>";
	?>

	<?php
		#vars
		$number = 30;
		$price = 12.4;
		$tax_rate = .05;

		#calc
		$total = $number * $price;
		$total = $total + ($total * $tax_rate);

		#echo
		echo "<p>You are buying $number CDs for $" . number_format($price, 2) . ".";
		echo "<br/>The tax rate for these will be $" . number_format($tax_rate, 2) . ".";
		echo "<br/>The total purchase cost will be $$total.</p>"
	?>

	<?php
	#define(NAME, value)
	define("USERNAME", "blutank24");
	define("PI", 3.14);
	echo "<p>Your login is " . USERNAME . "</p>";
	echo "Pi is probably " . PI;

	echo "<br><br>" . PHP_OS;
	echo "<br>" . PHP_VERSION;




	?>


</body>
</html>



