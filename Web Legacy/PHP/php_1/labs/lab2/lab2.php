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
	</style>
</head>
<body>

	<div id="pagewrapper">
		<h1>CTEC 127 - Student Registration</h1>
		<p>Welcome to the CTEC 127 PHP regisration form for students. Students are very creative, they are like little butterflys floating without a draft onto a headwind. They adapt and become innovative with muffins and skateboards and other "cool dude" stuff. Because of these very compelling reasons, we need to keep track of some data. Please enter it in the form below.</p>

		<form action="process_form.php" method="post">

			<fieldset>
				<legend>&nbsp;&nbsp;Insert your information here&nbsp;&nbsp;</legend>

				<p>
					<label>First Name: </label>
					<input type="text" name="firstname" size="20" maxlength="40">
				</p>
				<p>
					<label>Last Name: </label>
					<input type="text" name="lastname" size="20" maxlength="40">
				</p>
				<p>
					<label for="gender">Gender: </label>
					<input type="radio" name="gender" value="Male"> Male
					<input type="radio" name="gender" value="Female"> Female
				</p>
				<p>
					<label>Student ID: </label>
					<input type="text" name="sid" size="9" maxlength="9">
				</p>
				<p>
					<label>Degree Program: </label>
					<select name="degree">
						<option value="Web Development">Web Development</option>
						<option value="Web Design">Web Design</option>
						<option value="Graphic Design">Graphic Design</option>
						<option value="Something Lame">Something Lame</option>
					</select>
				</p>
				<p>
					<label>Comments: </label>
					<textarea name="comments" rows="3" cols="40"></textarea>
				</p>
				<div id="buttons">
					<p>
						<input type="submit" value="Submit Information">
					</p>
					<p>
						<input type="reset" value="Clear Form">
					</p>
				</div>
			</fieldset>
	</div><!--end PW-->

</body>
</html>