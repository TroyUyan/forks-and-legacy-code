<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style type="text/css" title="text/css" media="all">
		body {font-family: Verdana;}
		#pagewrapper {width: 600px;margin: 0 auto;font-size: 0.9em;}
		label {clear:both; float:left; width:100px;color: red;}
		.error {font-weight: bold;color: red;}
	</style>
</head>

<body>
	<div id="pagewrapper">

		<?php 

			$age = $_REQUEST["age"];

			if (!empty($_REQUEST["name"])) {
				$name = $_REQUEST["name"];
			} else {
				$name = NULL;
				echo '<p class="error">You forgot to enter your name, 007!</p>';
			}

			if (!empty($_REQUEST["email"])) {
				$email = $_REQUEST["email"];
			} else {
				$email = NULL;
				echo '<p class="error">You forgot to enter your email, you drifter!</p>';
			}

			if (!empty($_REQUEST["comments"])) {
				$comments = $_REQUEST["comments"];
			} else {
				$comments = NULL;
				echo '<p class="error">You forgot to enter some comments, bro!</p>';
			}

			if (isset($_REQUEST["gender"])) {
				$gender = $_REQUEST["gender"];

				if ($gender == "Male") {
					$greeting = "<p>Good day, sir!</p>";
				} elseif ($gender == "Female") {
					$greeting = "<p>Good day, madam!</p>";
				} else {
					$gender = NULL;
					echo '<p class="error">You did not enter a gender!</p>';
				}

			} else {
				$gender = NULL;
				echo '<p class="error">You did not enter a gender!</p>';
			}

			if ($name && $email && $gender && $comments) {
				echo "<p>Thank you $name for the following comments:</p>
				<p><tt>$comments</tt></p>
				<p>We will reply to you, a $gender $age, at $email as soon as possible.";
				echo "$greeting";
			} else {
				echo '<p class="error">Please go back and fill out the form again! I mean like, pretty please?</p>';
			}
			



		?><!--end php-->
		

	</div>
</body>
</html>



