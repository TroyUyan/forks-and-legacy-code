<?php include('/inc/header.php') ?>

<?php // Function to create a sticky radio button!
	function create_gallon_radio($value) {
		// Start the HTML element
		echo '<input type="radio" name="gallon_price" value="' . $value . '"';
		// Check for sticky
		if ($_POST['gallon_price'] == $value) {echo ' checked="checked"';}
		// Complete the element
		echo '/> ' . "$" . "$value";
	} // End of function
 ?>

<?php
	// Was method POST
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Are all values set and numeric
		if (isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency'])
			AND is_numeric($_POST['distance'])
			AND is_numeric($_POST['gallon_price'])
			AND is_numeric($_POST['efficiency']) ) {
			// Start IF clause
			// Calculations
			$gallons = $_POST['distance'] / $_POST['efficiency'];
			$dollars = $gallons * $_POST['gallon_price'];
			$hours = $_POST['distance'] / 65;

			// Print results
			echo "<h1>Calculator Results</h1>";
			echo "<p>The total cost of driving " . $_POST['distance'] . " miles averaging " .
					$_POST['efficiency'] . " miles per gallon, and paying an average of $" .
					$_POST['gallon_price'] . " per gallon, is <strong>$" . number_format($dollars, 2) .
					"</strong>. <br>If you drive an average of 65 miles per hour, the trip will take approximately <strong>" .
					number_format($hours, 2) . "</strong> hours.";
		} else {
			// If invalid form submission
			echo "<h1>Error!</h1>";
			echo "<p>Please enter a valid distance, gallon price, and fuel efficiency.</p>";
		} // End else 
	} // End if-else
//End PHP ?>

<h1>Trip Cost Calculator</h1>

<style type="text/css">
	form {width:200px;}
</style>

<form method="post" action="trip_calculator.php">
	<p>
		Distance (in miles):<br>
		<input type="text" name="distance" value="<?php echo "{$_POST['distance']}";?>">
	</p>
	<p>
		Average Price Per Gallon:<br>
		<!--base units created with HTML, function units with PHP and an arguement-->
		<input type="radio" name="gallon_price" value="3.00" <?php if ($_POST['gallon_price'] == 3.00) {echo 'checked="checked"';}?>> $3.00&nbsp;
		<?php create_gallon_radio(3.25) ?>&nbsp;
		<input type="radio" name="gallon_price" value="3.50" <?php if ($_POST['gallon_price'] == 3.50) {echo 'checked="checked"';}?>> $3.50&nbsp;
		<?php create_gallon_radio(3.75) ?>&nbsp;
		<input type="radio" name="gallon_price" value="4.00" <?php if ($_POST['gallon_price'] == 4.00) {echo 'checked="checked"';}?>> $4.00&nbsp;
		<?php create_gallon_radio(4.25) ?>&nbsp;
	</p>
	<p>
		Fuel Efficiency:<br>
		<select name="efficiency">
			<option value="notset">-- Select One --</option>
			<option value="10" <?php if ($_POST['efficiency'] == 10) {echo 'selected="selected"';}?>>Terrible (~10mpg)</option>
			<option value="20" <?php if ($_POST['efficiency'] == 20) {echo 'selected="selected"';}?>>Decent (~20mpg)</option>
			<option value="30" <?php if ($_POST['efficiency'] == 30) {echo 'selected="selected"';}?>>Very Good (~30mpg)</option>
			<option value="50" <?php if ($_POST['efficiency'] == 50) {echo 'selected="selected"';}?>>Outstanding (~50mpg)</option>
		</select>
	</p>
	<input type="submit" value="Calculate!">


</form>

<?php include('/inc/footer.php') ?>