<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple Form</title>
</head>
<body>


	<form method="POST" action="processform.php">
		<p>
			<input type="text" name="firstname">
		</p>
		<p>
			<input type="text" name="lastname">
		<p>
			<input type="checkbox" name="moods[]" value="Happy :)">Happy :)
			<input type="checkbox" name="moods[]" value="Sad :(">Sad :(
			<input type="checkbox" name="moods[]" value="Rawr! >:|">Rawr! >:|
		</p>
			<input type="radio" name="gender" value="Male">Male
			<input type="radio" name="gender" value="Female">Female
		<p>
			<input type="submit" value="Save">
		</p>
	</form>

</body>
</html>