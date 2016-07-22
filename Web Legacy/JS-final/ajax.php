<?php 
	$htmlTitle = "AJAX";
	include 'inc/header.inc.php';
?>

	<h2>Check User Name</h2>
	
	<label for="username">Username</label>
	<input type="text" name="username" id="username" autocomplete="off">

	<p id="result"></p>
	
	<p>"Taken" usernames are:</p>
	<ul>
		<li>Anything less then 3 characters</li>
		<li>Mark</li>
		<li>blutank24</li>
		<li>Mittens</li>
	</ul>

<?php 
	include 'inc/footer.inc.php';
?>