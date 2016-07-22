<?php $pagetitle = "Products"; ?>
<?php include('inc/header.inc.php'); ?>
<?php require('inc/mysqli_connect.inc.php'); ?>

<h2>Products Page</h2>

<?php 

	#set Q and run Q
	$sql = "SELECT * FROM Products";
	$result = mysqli_query($dbc, $sql);

	#display Q results
	while ($rows = mysqli_fetch_array($result)) {
		echo "<div class=\"product\">";
		echo "<img src=\"{$rows['Image']}\" alt=\"\" class=\"floatl margin\">";
		echo "<h3>{$rows['Name']}</h3>";
		echo "<p>Price: \${$rows['Price']}.00</p>";
		echo "<p>{$rows['Desc']}</p>";
		echo "</div>";
	}
?>

<?php /* close connection */ mysqli_close($dbc) ?>
<?php include('inc/footer.inc.php'); ?>