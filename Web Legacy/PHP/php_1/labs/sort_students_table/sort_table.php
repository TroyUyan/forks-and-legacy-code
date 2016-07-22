<?php include('/inc/header.php') ?>
<?php require 'mysqli_connect.inc.php'; ?>

<h2>Sort Data from the Students Table</h2>

<form method="post" aciton="sort_table.php">
<p>Sort by Field:
<select name="sort_order">
	<option value="first_name">First Name</option>
	<option value="last_name">Last Name</option>
	<option value="student_id">Student ID</option>
	<option value="email">Email</option>
	<option value="phone">Phone</option>
</select>
</p>

<p>Sorting Order:
<select name="order_by">
	<option value="ASC">Ascending</option>
	<option value="DESC">Descending</option>
</select>
</p>
<input type="submit">
</form>

<?php 
		

	if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
		# default query
		echo "<p>We have not posted yet! :(</p>";
		$result = mysqli_query($dbc, 'SELECT * FROM students');
	} else {
		# actual query results,
		echo "<p>We have posted! =)</p>";
		$result = mysqli_query($dbc, "SELECT * FROM students ORDER BY {$_POST['sort_order']} {$_POST['order_by']}");
	}

	echo "<p>The the number of records returned was " . mysqli_num_rows($result) . ".</p>\n";
	echo "<table>\n";
	echo "<tr><th>First Name</th><th>Last Name</th><th>Student ID</th><th>Email</th><th>Phone</th></tr>\n";
	while ($row = mysqli_fetch_array($result)) {
		echo "<tr>\n<td>{$row['first_name']}</td><td>{$row['last_name']}</td><td>{$row['student_id']}</td><td>{$row['email']}</td><td>{$row['phone']}</td>\n</tr>\n";
	}
	echo "</table>";
	

 // END PHP ?>

<?php /* close connection */ mysqli_close($dbc) ?>
<?php include('/inc/footer.php') ?>