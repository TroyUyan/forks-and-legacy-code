<?php 
	$htmlTitle = "Form";
	include 'inc/header.inc.php';
?>

	<h2>Form Validation</h2>

	<form id="form" method="post" action="http://ctec.clark.edu/~belgort/formprocessing/processform.php">

		<p>
			<label for="fname">First Name:</label>
			<input type="text" name="fname" id="fname" class="required" title="Please enter your first name.">
		</p>

		<p>
			<label for="lname">Last Name:</label>
			<input type="text" name="lname" id="lname" class="required" title="Please enter your last name.">
		</p>

		<p>
			<label for="email">Email:</label>
			<input type="text" name="email" id="email" class="required email" title="Please enter your email name.">
		</p>

		<p>
			<label for="region">Your Region:</label>
			<select name="region" id="region" class="required" title="Select a region.">
				<option value="">&nbsp;</option>
				<option value="NA">North America</option>
				<option value="SA">South America</option>
				<option value="EU">Europe</option>
				<option value="AS">Asia</option>
				<option value="AU">Austrailia</option>
				<option value="AF">Africa</option>
			</select>
		</p>

		<p>Gender:<br>
			<input type="radio" name="gender" value="M" id="G-M" class="required" title="Please select your gender."> <label for="G-M">Male</label><br>
			<input type="radio" name="gender" value="F" id="G-F"> <label for="G-F">Female</label>
		</p>

		<p>How did you hear about us?<br>
			<input type="checkbox" name="hear[]" value="Google" id="Google" class="required" title="Please select a referal."> <label for="Google">Google</label><br>
			<input type="checkbox" name="hear[]" value="Friend" id="Friend"> <label for="Friend">From a Friend</label><br>
			<input type="checkbox" name="hear[]" value="Newspaper" id="Newspaper"> <label for="Newspaper">Newspaper</label>
		</p>

		<input type="submit" value="Submit Form">

	</form>

	<p>&nbsp;</p>

<?php 
	include 'inc/footer.inc.php';
?>