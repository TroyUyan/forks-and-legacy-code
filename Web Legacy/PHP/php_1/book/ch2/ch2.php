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

		<form action="handle_form.php" method="post">
			<fieldset>
				<legend>&nbsp;&nbsp;Insert your information here&nbsp;&nbsp;</legend>

				<p>
					<label>Name: </label>
					<input type="text" name="name" size="20" maxlength="40">
				</p>
				<p>
					<label>Email: </label>
					<input type="text" name="email" size="20" maxlength="60">
				</p>
				<p>
					<label for="gender">Gender: </label>
					<input type="radio" name="gender" value="Male"> Male
					<input type="radio" name="gender" value="Female"> Female
				</p>
				<p>
					<label>Age: </label>
					<select name="age">
						<option value="Under 30">Under 30</option>
						<option value="30-60">Between 30 and 60</option>
						<option value="Over 60">Over 60</option>
					</select>
				</p>
				<p>
					<label>Comments: </label>
					<textarea name="comments" rows="3" cols="40"></textarea>
				</p>
				<p style="text-align:center;padding-top:8px;">
					<input type="submit" value="Submit Form">
				</p>

			</fieldset>
			

		</form>
	</div>
</body>
</html>



