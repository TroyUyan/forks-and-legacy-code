<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SQL Hello World</title>
</head>
<body>
<?php 

// connect to db
require("mysqli_connect.inc.php");

// connection to db made in include, now query from the db table
$result = mysqli_query($dbc, "SELECT * FROM students ORDER BY student_id");

// how many rows?
$rows = mysqli_num_rows($result);
echo "The number of rows in the users table is " . $rows . ".<br/><br/>";

echo "The students we have in the database are.";

// while data is being returned from the table, continue to loop through it
while ($rows = mysqli_fetch_array($result)) {
	echo "<p><b>Student ID:</b> {$rows['student_id']}<br>
	<b>Name:</b> {$rows['last_name']}, {$rows['first_name']}<br>
	<b>Email:</b> {$rows['email']}<br>
	<b>Phone Number:</b> {$rows['phone']}";
}

// close db connection
mysqli_close($dbc);

 ?>
</body>
</html>

