<!doctype html>
<!--
	Troy Uyan
	Lab 1
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CTEC 127 - Lab 1</title>
	<style type="text/css" title="text/css" media="all">
		body {font-family: Verdana;}
		#pagewrapper {width: 600px;margin: 0 auto;font-size: 0.9em;}
		label {clear:both; float:left; width:100px;color: red;}
	</style>
</head>
<body>
	<div id="pagewrapper">
		<?php
		$username = "troyuyan24";
		$password = "googleelgoog";
		$firstname = "Troy";
		$lastname = "Uyan";
		$age = 19;
		$salary = 90000;
		$sal_five = number_format($salary * 5);
		echo "<p>Hello $firstname $lastname, welcome to CTEC 127.</p>";
		echo "<p>Here are your username and password for the new WizBango system:</p>";
		echo "<p>Username: $username</p>" . "<p>Password: $password</p>";
		echo "<p>We have your age recorded as <strong>$age</strong>, and your annual salary recorded as <strong>$$salary</strong>.</p>";
		echo "<p>Your total salary for the 5 year contract is $sal_five.</p>";
		echo "<h1>Something has totally gone wrong. Below is a dump of the PHP server configuration:</h1>";
		echo "<hr>";
		echo phpinfo();
		?><!--end php-->		
	</div>
</body>
</html>