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
		<h1 style="text-align:center;">It's a form, bro!</h1>
		<form method="post" action="process_form.php">
			<p>
				<label>First Name: </label>
				<input type="text" name="firstname">
			</p>
			<p>
				<label>Last Name: </label>
				<input type="text" name="lastname">
			</p>
			<p>
				<input type="submit" value="Submit the data!">
			</p>
		</form>
	</div>




</body>
</html>