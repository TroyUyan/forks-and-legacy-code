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
			

			if (empty($firstname)) {
				echo "Homie, fill out the form correctly. (Need first name)";
			} else {
				$firstname = $_REQUEST['firstname'];
			}

			if (empty($lastname)) {
				echo "Homie, fill out the form correctly. (Need last name)";
			} else {
				$lastname = $_REQUEST['lastname'];
			}

			echo "<p>Hey buddy, I was like, I know your name, and it's $firstname.</p>
				<p>Your properly formatted name is $lastname, $firstname.</p>";


		?>
	</div>




</body>
</html>