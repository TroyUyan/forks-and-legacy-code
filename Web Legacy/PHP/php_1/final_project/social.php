<?php $pagetitle = "Social"; ?>
<?php include('inc/header.inc.php'); ?>
<?php require('inc/mysqli_connect.inc.php'); ?>

<h2>Social Media Stream</h2>

<?php
	#query
	$sql = "SELECT * FROM social";

	#query to DB
	$result = mysqli_query($dbc,$sql);

	#display Q results
	while ($rows = mysqli_fetch_array($result)) {
		echo "<div class=\"clear tweetbox\">"; #End PHP?>
		<img class="floatl" src="<?php echo "{$rows['Avatar']}"?>" alt="">
		<?php
		echo "<p class=\"tweetdate\">Posted by {$rows['Name']} on {$rows['Date']}";
		echo "<p class=\"tweet\">{$rows['Content']}</p>";
		echo "</div>";
	}
#End PHP ?>

<?php /* close connection */ mysqli_close($dbc) ?>
<?php include('inc/footer.inc.php'); ?>