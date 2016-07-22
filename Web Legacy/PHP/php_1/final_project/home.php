<?php $pagetitle = "Home"; ?>
<?php include('inc/header.inc.php'); ?>
<?php require('inc/mysqli_connect.inc.php'); ?>

	<h2>Serenito Designs Home</h2>

			<div class="info_section">
				<img src="img/clipboard_full.png" class="floatl" alt="">
				<h3>What We Do</h3>
				<?php 
					$sql = "SELECT Content FROM homepage_content WHERE ID = 1";
					$result = mysqli_query($dbc, $sql);

					while ($rows = mysqli_fetch_array($result)) {
						echo "<p>{$rows['Content']}</p>";
					}
				?>
			</div><!--end info_section-->


			<div class="info_section">
				<img src="img/screen_rulers_glossy.png" class="floatl" alt="">
				<h3>What We Design</h3>
				<?php 
					$sql = "SELECT Content FROM homepage_content WHERE ID = 2";
					$result = mysqli_query($dbc, $sql);

					while ($rows = mysqli_fetch_array($result)) {
						echo "<p>{$rows['Content']}</p>";
					}
				?>
			</div><!--end info_section-->

			<div class="clear"></div>

			<div class="info_section">
				<img src="img/button_red_heart.png" class="floatl" alt="">
				<h3>Our Team</h3>
				<?php 
					$sql = "SELECT Content FROM homepage_content WHERE ID = 3";
					$result = mysqli_query($dbc, $sql);

					while ($rows = mysqli_fetch_array($result)) {
						echo "<p>{$rows['Content']}</p>";
					}
				?>
			</div><!--end info_section-->

			<div id="mail_list" class="info_section">
				<form method="post" action="home.php">
					<img src="img/mail_forward.png" class="floatl" alt="">
					<h3>Mailing List</h3>
					<p>You can use the form below to subscribe to our mailing list and keep up to date on new products, services, and coupon codes!</p>
					<p class="margin">
						<input type="text" name="Name" placeholder="  Enter Your Name" size="35">
					</p>
					<p class="margin">
						<input type="email" name="Email" placeholder="  Enter Your Email" size="35">
					</p>
					<p class="margin">
						<input type="submit" value=" Subscribe! ">
					</p>

					<?php 
						if ($_SERVER['REQUEST_METHOD'] == 'POST') {

							if (!empty($_POST['Name']) AND (!empty($_POST['Email']))) {
								$name = $_POST['Name'];
								$email = $_POST['Email'];
								$sql = "INSERT INTO mailing_list (Name, Email) VALUES ('$name','$email')";
								mysqli_query($dbc, $sql);
								# echo "$sql";
								if (mysqli_affected_rows($dbc) == 1) {
									echo "<p class=\"success\"><img src=\"img/accept.png\">&nbsp;Thank you for subscribing!</p>";
								} else {
									echo "<p class=\"fail\"><img src=\"img/cancel.png\">&nbsp;Form submitted but query failed!</p>";
								}
							} else {
								echo "<p class=\"fail\"><img src=\"img/cancel.png\">&nbsp;Please enter a name and email address!</p>";
							}

						/*End request_method if-else*/ }
					#End PHP ?>

				</form>
				
			</div><!--end mail_list-->

<?php /* close connection */ mysqli_close($dbc) ?>
<?php include('inc/footer.inc.php'); ?>