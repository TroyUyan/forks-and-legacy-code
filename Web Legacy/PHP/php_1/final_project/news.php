<?php $pagetitle = "News"; ?>
<?php include('inc/header.inc.php'); ?>
<?php require('inc/mysqli_connect.inc.php'); ?>

<h2>Latest News</h2>



<?php
	
	#set Q and Q DB
	$sql = "SELECT * FROM news";

	$result = mysqli_query($dbc,$sql);

	#display Q results
	while ($rows = mysqli_fetch_array($result)) {
		echo "<div class=\"newsbox\">";
		echo "<h3>{$rows['Title']}</h3>";
		echo "<p class=\"dateline\">Article published on {$rows['Date']}";
		echo "<p>{$rows['Content']}</p>";
		echo "</div>";
	}

?>

<?php /* close connection */ mysqli_close($dbc) ?>
<?php include('inc/footer.inc.php'); ?>