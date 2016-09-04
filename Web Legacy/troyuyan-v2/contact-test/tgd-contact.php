<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Contact TGD Charts</title>
  <meta charset="UTF-8">
</head>
<body>

  <?php

    if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

      // init post data
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];

      // create the email body
      $msgBody = $name . " submitted the TGD Charts Contact Form with the following information:\n\r";
      $msgBody .= "Name: " . $name . "\n\r";
      $msgBody .= "Email: " . $email . "\n\r";
      $msgBody .= "Message: " . $message . "\n\r";

      // word-wrap the body
      $msgBody = wordwrap($msgBody,100,"\r\n");

      // send the email (to, subj, message, headers)
      //mail("blutank24@msn.com", "{$name}: TGD Charts Contact Form", $msgBody, "From: {$email}");
      if ( mail("blutank24@msn.com", "{$name}: TGD Charts Contact Form", $msgBody, "From: {$email}") ) {
        // submitted msg
        echo "<h3>Message sent, thank you!</h3>";
      } else {
        // on fail
        echo "<h3>There was a problem submitting your message. Please try again later.</h3>";
      }

    } // end if-posted
  ?>

  <form method="POST" action="tgd-contact.php">

    <p>
      <label>Name</label><br>
      <input type="text" name="name" id="name" required="required" size="40" maxlength="80">
    </p>
    <p>
      <label>Email</label><br>
      <input type="text" name="email" id="email" required="required" size="40" maxlength="80">
    </p>
    <p>
      <label>Message</label><br>
      <textarea name="message" id="message" required="required" cols="41" rows="8" maxlength="500"></textarea>
    </p>

    <input type="submit" value="Send Message">

  </form>

</body>
</html>