<?php $pagetitle = "Order"; ?>
<?php include('inc/header.inc.php'); ?>
<?php require('inc/mysqli_connect.inc.php'); ?>

<h2>Order Page</h2>

<?php 

	#check form submitted / after form is submitted
	if ($_SERVER['REQUEST_METHOD'] == "POST") {

		echo "<div id=\"order_results\">";

		#check all fields are set
		#if not set make them NULL so can use isset later

		if (!empty($_POST["First_Name"])) {
				$first = $_POST["First_Name"];
		} else {
				$first = NULL;
				echo "<p class=\"fail\"><img src=\"img/cancel.png\">Please enter a first name.</p>";
		}

		if (!empty($_POST["Last_Name"])) {
				$last = $_POST["Last_Name"];
		} else {
				$last = NULL;
				echo "<p class=\"fail\"><img src=\"img/cancel.png\">Please enter a last name.</p>";
		}

		if (!empty($_POST["Address"])) {
				$address = $_POST["Address"];
		} else {
				$address = NULL;
				echo "<p class=\"fail\"><img src=\"img/cancel.png\">Please enter an address.</p>";
		}

		if (!empty($_POST["City"])) {
				$city = $_POST["City"];
		} else {
				$city = NULL;
				echo "<p class=\"fail\"><img src=\"img/cancel.png\">Please enter a city.</p>";
		}

		if (!empty($_POST["State"])) {
				$state = $_POST["State"];
		} else {
				$state = NULL;
				echo "<p class=\"fail\"><img src=\"img/cancel.png\">Please enter a state.</p>";
		}

		if (!empty($_POST["Zip"])) {
				$zip = $_POST["Zip"];
		} else {
				$zip = NULL;
				echo "<p class=\"fail\"><img src=\"img/cancel.png\">Please enter a zip code.</p>";
		}

		if (!empty($_POST["Product"])) {
				$product = $_POST["Product"];
		} else {
				$product = NULL;
				echo "<p class=\"fail\"><img src=\"img/cancel.png\">Please enter a product.</p>";
		}

		#all fields are set, meaning none got set to NULL
		#and they have values because they were checked to be !empty
		#echo results
		if(isset($first, $last, $address, $city, $state, $zip, $product)    ) {
			echo "<p class=\"success\"><img src=\"img/accept.png\">Form submitted successfully!</p>";
			echo "<label>First Name:</label> {$_POST['First_Name']}<br/>";
			echo "<label>Last Name:</label> {$_POST['Last_Name']}<br/>";
			echo "<label>Address:</label> {$_POST['Address']}<br/>";
			echo "<label>City:</label> {$_POST['City']}<br/>";
			echo "<label>State:</label> {$_POST['State']}<br/>";
			echo "<label>Zip:</label> {$_POST['Zip']}<br/>";
			#product needs loop because its an array
			echo "<label>Product:</label><br/>";
			#initilize product string for SQL statement
			$product_string = "";
			#run the loop to interate through the Products selection array
			foreach($_POST as $key => $value){
				if(is_array($value)){
					$count = count($value);
					for($i=0;$i<$count;$i++){
						#echo the product name
						echo "&nbsp;&nbsp;&nbsp;- {$value[$i]}<br>";
						#add product to the SQL product string
						$product_string = $product_string . "{$value[$i]}  ";
					}
				}
			} #End For-each
		
			#INSERT RESULTS INTO DB
			$sql = "INSERT INTO orders (First, Last, Address, City, State, Zip, Products) VALUES ('$first','$last','$address','$city', '$state', '$zip', '$product_string')";
			mysqli_query($dbc, $sql);
			if (mysqli_affected_rows($dbc) == 1) {
				echo "<p class=\"success\"><img src=\"img/accept.png\">&nbsp;Thank you for your order!<br>It was process successfully to the database.</p>";
			} else {
				echo "<p class=\"fail\"><img src=\"img/cancel.png\">&nbsp;Form submitted but query failed!</p>";
				echo "<p class=\"fail\">This was the SQL statement:<br>$sql";
			}



		/*END IF(isset() IF statement*/ }

		echo "</div>";

	} else { #END PHP ?>

<form action="order.php" method="post" id="orderform">
	<p class="formfield">
		<label for="First_Name">First Name:</label>
		<input type="text" name="First_Name" id="First_Name">
	</p>
	<p class="formfield">
		<label for="Last_Name">Last Name:</label>
		<input type="text" name="Last_Name" id="Last_Name">
	</p>
	<p class="formfield">
		<label for="Address">Address:</label>
		<input type="text" name="Address" id="Address" size="40">
	</p>
	<p class="formfield">
		<label for="City">City:</label>
		<input type="text" name="City" id="City">
	</p>
	<p class="formfield">
		<label for="State">State:</label>
		<select name="State" id="State">
			<option value="">-- Select One --</option>
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
		</select>
	</p>
	<p class="formfield">
		<label for="Zip">Zip Code:</label>
		<input type="text" name="Zip" id="Zip" size="5">
	</p>
	<p class="formfield">
		<label>Products:</label>
		<span class="checkbox"><br>
		<input type="checkbox" name="Product[]" value="Logo Design">Logo Design<br>
		<input type="checkbox" name="Product[]" value="Branding Package">Branding Package<br>
		<input type="checkbox" name="Product[]" value="Base Web Design">Base Web Design<br>
		<input type="checkbox" name="Product[]" value="Full Responsive Web Design">Full Responsive Web Design
		</span>
	<p>
	<p class="formfield">
		<input type="Submit" value="Submit Order">
	</p>
</form>
	<?php } #END ELSE CLAUSE ?>



<?php /* close connection */ mysqli_close($dbc) ?>
<?php include('inc/footer.inc.php'); ?>