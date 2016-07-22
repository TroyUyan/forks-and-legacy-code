<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lab 2</title>
	<style type="text/css" title="text/css" media="all">
		body {font-family: Verdana;}
		#pagewrapper {width: 600px;margin: 0 auto;font-size: 0.9em;}
		label {clear:both; float:left; width:150px;color: #444;}
		#buttons {text-align:center;padding-top:8px;}
		#buttons input {float:left;margin-left: 70px;padding: 2px 5px;}
		.error {color: red;}
	</style>
</head>
<body>

	<div id="pagewrapper">

		<h1>CTEC 127 - Student Registration</h1>

		<?php

			$degree = $_POST['degree'];

			if (!empty($_POST['firstname'])) {
				$firstname = $_POST['firstname'];
			} else {
				$firstname = NULL;
				echo '<p class="error">You forgot to enter your first name, 007!</p>';
			}

			if (!empty($_POST['lastname'])) {
				$lastname = $_POST['lastname'];
			} else {
				$lastname = NULL;
				echo '<p class="error">You forgot to enter your last name, 007!</p>';
			}

			if (!empty($_POST['sid'])) {
				$sid = $_POST['sid'];
			} else {
				$sid = NULL;
				echo '<p class="error">You forgot to enter your student ID, buster!</p>';
			}

			if (!empty($_POST['comments'])) {
				$comments = $_POST['comments'];
			} else {
				$comments = NULL;
				echo '<p class="error">You forgot to enter some amazing comments!</p>';
			}
			
			if (isset($_POST["gender"])) {
				$gender = $_POST["gender"];
			} else {
				$gender = NULL;
				echo '<p class="error">You did not enter a gender!</p>';
			}

			if ($firstname AND $lastname AND $comments AND $sid AND $comments) {
				echo "<p>Thank you for filling out the PHP class registration form.</p>";
				echo "<p>Your info:</p>";
				echo "<p>Name: <code>$lastname, $firstname</code><br>
				Student ID: <code>$sid</code><br>
				Gender: <code>$gender</code><br>
				Degree: <code>$degree</code><br>
				Comments: <code>$comments</code></p>";
			} else {
				echo '<p class="error"><strong>Please go back and fill the form out again!</strong></p>';
			}
			

		?>

		
	</div><!--end PW-->

</body>
</html>