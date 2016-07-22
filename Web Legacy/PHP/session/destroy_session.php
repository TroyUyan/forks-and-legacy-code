<?php include('/inc/header.php') ?>

<h2>Destroy Session (Unset)</h2>

<?php 

	# Unset all variables
	unset($_SESSION['views']);
	echo "<p><code>Views</code> was unset.</p>";

	unset($_SESSION['browser']);
	echo "<p><code>Browser</code> was unset.</p>";

	unset($_SESSION['role']);
	echo "<p><code>Role</code> was unset.</p>";

?>


<?php include('/inc/footer.php') ?>