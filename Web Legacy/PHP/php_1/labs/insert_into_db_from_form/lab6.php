<?php include('/inc/header.php'); ?>
<?php require 'mysqli_connect.inc.php'; ?>

<h2>Insert Data Into Students Table</h2>

<p>This form will insert data into the students table in the ctec_127 database within MySQL.</p>

<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// Are all values set? IF
		if (!empty($_POST['first_name']) AND !empty($_POST['last_name']) AND is_numeric($_POST['student_id']) AND !empty($_POST['email']) AND !empty($_POST['phone'])) {

			// THEN
			echo "<h3 style=\"color:green;\">Yay! The results were processed successfully!</h3>";
			echo "<p>You submitted the following:<br>
			First Name: {$_POST['first_name']}<br>
			Last Name: {$_POST['last_name']}<br>
			Student ID: {$_POST['student_id']}<br>
			Email: {$_POST['email']}<br>
			Phone: {$_POST['phone']}";

			// create sql statement
			$sql = "INSERT INTO ctec127_lab4.students (`first_name`, `last_name`, `email`, `student_id`, `phone`) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', '{$_POST['email']}', {$_POST['student_id']}, '{$_POST['phone']}')";

			// use sql statement in query function
			$result = @mysqli_query($dbc, $sql);

			// check and error if sql was actually submitted to db
			if ($result == TRUE) {
				echo "<p>The SQL query was also <span style=\"color:green\">submitted successfully</span> to the database with the following statement:</p>";
				echo "<p style=\"font-size:13px;\">$sql</p>";
			} else {
				echo "<p>The SQL query <span style=\"color:red\">WAS NOT</span> submitted successfully to the database however, try again.";
				echo "<p style=\"font-size:13px;\">$sql</p>";
			}

		} else { 
			// ELSE
			echo "<h3 style=\"color:red;\">Sorry! The form was not submitted correctly.</h3>";
			echo "<p>Please go back and fill the form out again!</p>";
		}
	}

//End PHP ?>

<br>

<form action="lab6.php" method="post">
	<fieldset>
		<legend>Insert Your Information Here</legend>

		<p>
			First Name:<br>
			<input type="text" name="first_name">
		</p>
		<p>
			Last Name:<br>
			<input type="text" name="last_name">
		</p>
		<p>
			Student ID: (4-Digit Number)<br>
			<input type="text" name="student_id">
		</p>
		<p>
			Email:<br>
			<input type="text" name="email">
		</p>
		<p>
			Phone:<br>
			<input type="text" name="phone">
		</p>

		<input type="submit" value="Submit Form!"> <!--<input type="reset" value="Clear Form!">-->
		
	</fieldset>
</form>

<!-- STICKY FORM (FULL FORM)
DIDNT USE STICKY FORM BECAUSE THE "CLEAR" BUTTON DOESNT WORK WITH A STICKY FORM!

		<p>
			First Name:<br>
			<input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) {echo "{$_POST['first_name']}";}?>">
		</p>
		<p>
			Last Name:<br>
			<input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) {echo "{$_POST['last_name']}";}?>">
		</p>
		<p>
			Student ID: (4-Digit Number)<br>
			<input type="text" name="student_id" value="<?php if (isset($_POST['student_id'])) {echo "{$_POST['student_id']}";}?>">
		</p>
		<p>
			Email:<br>
			<input type="text" name="email" value="<?php if (isset($_POST['email'])) {echo "{$_POST['email']}";}?>">
		</p>
		<p>
			Phone:<br>
			<input type="text" name="phone" value="<?php if (isset($_POST['phone'])) {echo "{$_POST['phone']}";}?>">
		</p>
-->

<!--
INSERT INTO students (first_name, last_name, email, student_id, phone) VALUES ('Troy', 'Uyan', 'troyuyan@hi.com', '1254', '432-432-6543'); 


mysqli_query() SQL statement with one to INSERT data.
The data will be the five data fields from the form. 


INSERT INTO students (first_name, last_name, col_names) VALUES ('troy','uyan',12,'hi')

$sql .=

insert into students
.= column names
.= values
-->

<?php /* close connection */ mysqli_close($dbc) ?>
<?php include('/inc/footer.php'); ?>