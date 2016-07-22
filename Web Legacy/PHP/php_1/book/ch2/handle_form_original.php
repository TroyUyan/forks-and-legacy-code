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
		<?php #form processor

		#form 'names' for each field
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$comments = $_REQUEST['comments'];
		/*$gender = $_REQUEST['gender'];
		$age = $_REQUEST['age'];*/

		if (isset($_REQUEST['gender'])) {
			$gender = $_REQUEST['gender'];
		} else {
			$gender = NULL;
		}

		#print message
		echo "<p>Thank you $name for the following comments:</p>
			<p>$comments</p>
			<p>We will respond to you <em>$email</em> soon!</p>";

		if ($gender == "Male") {
			echo "Have a good day, sir!";
		} elseif ($gender == "Female") {
			echo "Have a good day, madam!";
		} else {
			echo "You forgot to enter a gender! But have a good day anyway.";
		}

		?><!--end php-->

	</div>
</body>
</html>



