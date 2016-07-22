<?php include('/inc/header.php') ?>

<h2>Create Session</h2>

<?php 

	# Check and set views
	if (!isset($_SESSION['views'])) {
		$_SESSION['views'] = 0;
		echo "<p><code>Views</code> was set.</p>";
	} else {
		$_SESSION['views'] = $_SESSION['views'] + 1;
		echo "<p><code>Views</code> has already been set.</p>";
	}

	# Check and set browser
	if (!isset($_SESSION['browser'])) {
		$_SESSION['browser'] = $_SERVER['HTTP_USER_AGENT'];
		echo "<p><code>Browser</code> was set.</p>";
	} else {
		echo "<p><code>Browser</code> has already been set.</p>";
	}

	# Check and set role
	if (!isset($_SESSION['role'])) {
		$_SESSION['role'] = "Admin";
		echo "<p><code>Role</code> was set.</p>";
	} else {
		echo "<p><code>Role</code> has already been set.</p>";
	}

?>


<?php include('/inc/footer.php') ?>