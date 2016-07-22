<?php
	$level = "";
	$htmltitle = "Contact";
	include $level . 'inc/header.inc.php';
?>

	<?php slide("whiteslide"); ?>

		<?php pagetitle("Contact Troy Uyan"); ?>

		<?php 

		if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
			
			// init post data
			$name = $_POST['name'];
			$email = $_POST['email'];
			$reason = $_POST['reason'];
			$message = $_POST['message'];
			$projectinfo = $_POST['projectinfo'];
			$workinfo = $_POST['workinfo'];

			// create the email body
			$msgBody = $name . ": TroyUyan.com Contact Form\n\r";
			$msgBody .= "From: " . $name . "\n\r";
			$msgBody .= "Email: " . $email . "\n\r";
			$msgBody .= "Reason: " . $reason . "\n\r";
			$msgBody .= "Message: " . $message . "\n\r";
			$msgBody .= "Project Info: " . $projectinfo . "\n\r";
			$msgBody .= "Work Info: " . $workinfo . "\n\r";

			// word-wrap the body
			$msgBody = wordwrap($msgBody,70,"\r\n");

			// send the email (to, subj, message, headers)
			mail("admin@troyuyan.com", "{$name}: TroyUyan.com Contact Form", $msgBody, "From: {$email}");

			// submitted msg
			echo "<h3 class=\"live\">Message sent, thank you!</h3>";
			echo "<div class=\"lbumper\"></div>";

 		// end if-posted
		}

		?>

		<form method="POST" action="contact.php" id="contactform">

			<?php col(); ?>
				<p>
					<label>Your Name Is</label>
					<input type="text" name="name" id="name" placeholder="Your Name" required title="Please enter your name.">
				</p>
				<p>
					<label>Your Email Is</label>
					<input type="email" name="email" id="email" placeholder="Your Email" required class="email" title="Please enter your email.">
				</p>
				<p>
					<label>You're Contacting For A</label>
					<select name="reason" id="reason" required title="Please select your contact reason.">
						<option value="">-- Select One --</option>
						<option value="general">General Inquiry</option>
						<option value="work">Work Inquiry</option>
					</select>
				</p>
			<?php ecol(); ?>
			<?php col(); ?>
			 	<p>
			 		<label>Your Message Is</label>
			 		<textarea name="message" id="message" placeholder="Enter Your Message In Here" required title="Please enter your message."></textarea>
			 	</p>
			<?php ecol(); ?>

			<div class="clear"></div>
			<div id="work">
			<?php col() ?>
			 	<p>
			 		<label>Information About The Project</label>
			 		<textarea name="projectinfo" id="projectinfo" placeholder="Please use this field to include any additional information about the project. Such as its origin (company, personal, etc), or any relavent website links."></textarea>
			 	</p>
			<?php ecol() ?>
			<?php col() ?>
			 	<p>
			 		<label>Information About The Work</label>
			 		<textarea name="workinfo" id="workinfo" placeholder="Please use this field to add some information about the work to be done. Is it a scratch built web system, web app, responsive website design, etc."></textarea>
			 	</p>
			<?php ecol() ?>
			</div><!--end work fields-->

			<p class="center clear"><input type="submit" value="Submit Form"></p>
		</form>
	<?php endslide(); ?>
	
<?php 
	include $level . 'inc/footer.inc.php';
?>