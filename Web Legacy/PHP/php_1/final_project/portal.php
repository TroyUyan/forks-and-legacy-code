<?php $pagetitle = "Portal"; ?>
<?php include('inc/header.inc.php'); ?>
<?php require('inc/mysqli_connect.inc.php'); ?>

<h2>Portal Page</h2>

<div class="portaldiv">
	<h3>Featured Product</h3>
	<?php 
		$sql = "SELECT * FROM Products WHERE Name = 'Branding Package'";
		$result = mysqli_query($dbc, $sql);

		while ($rows = mysqli_fetch_array($result)) {
			echo "<div>";
			echo "<img src=\"{$rows['Image']}\" alt=\"\" class=\"floatl margin\">";
			echo "<h3>{$rows['Name']}</h3>";
			echo "<p>Price: \${$rows['Price']}.00</p>";
			echo '<p>Visit the <a href="products.php">products page</a> for more information!</p>';
			echo "</div>";
		}
	?>
	</div>

<div class="portaldiv">
<h3>Social Spotlight</h3>
<?php
	$sql = "SELECT * FROM social WHERE ID = 2";

	$result = mysqli_query($dbc,$sql);

	while ($rows = mysqli_fetch_array($result)) {
		echo "<div class=\"clear tweetbox\">"; #End PHP?>
		<img class="floatl" src="<?php echo "{$rows['Avatar']}"?>" alt="">
		<?php
		echo "<p class=\"tweetdate\">Posted by {$rows['Name']} on {$rows['Date']}";
		echo "<p class=\"tweet_portal\">{$rows['Content']}</p>";
		echo "</div>";
	}
#End PHP ?>
</div>

<div class="">
<h3>Latest News</h3>
<?php
	
	$sql = "SELECT * FROM news WHERE ID = 1";

	$result = mysqli_query($dbc,$sql);

	while ($rows = mysqli_fetch_array($result)) {
		echo "<div class=\"newsbox\">";
		echo "<h3>{$rows['Title']}</h3>";
		echo "<p class=\"dateline\">Article published on {$rows['Date']}";
		echo "<p>{$rows['Content']}</p>";
		echo "</div>";
	}

?>
</div>

<?php /* close connection */ mysqli_close($dbc) ?>
<?php include('inc/footer.inc.php'); ?>