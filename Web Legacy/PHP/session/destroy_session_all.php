<?php include('/inc/header.php') ?>

<h2>Destroy Session (Destroy)</h2>

<?php 

	# Destroy session
	session_destroy();
	echo "<p><code>All variables</code> were destroyed.</p>";

?>


<?php include('/inc/footer.php') ?>