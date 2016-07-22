<?php include('/inc/header.php') ?>

<h2>Read Session</h2>

<?php 

	# Read views
	if (isset($_SESSION['views'])) {
		$_SESSION['views'] = $_SESSION['views'] + 1;
		echo "<p><code>Views:</code> {$_SESSION['views']}</p>";
	} else {
		echo "<p><code>Views:</code> NULL</p>";
	}

	# Read browser
	if (isset($_SESSION['browser'])) {
		echo "<p><code>Browser:</code> {$_SESSION['browser']}</p>";
	} else {
		echo "<p><code>Browser:</code> NULL</p>";
	}

	# Read role
	if (isset($_SESSION['role'])) {
		echo "<p><code>Role:</code> {$_SESSION['role']}</p>";
	} else {
		echo "<p><code>Role:</code> NULL</p>";
	}

?>


<?php include('/inc/footer.php') ?>