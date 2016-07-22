<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 
		$order = "Veggie Sandwich";

		if ($order == "Turkey Sandwich") {
			echo "<p>Thanks for ordering the <strong>Turkey Sandwich</strong> from our online menu, your order will be ready for pickup in 30 minutes.</p>";
		} elseif ($order == "Ham Sandwich") {
			echo "<p>Thanks for ordering the <strong>Ham Sandwich</strong> from our online menu, your order will be ready for pickup in 36 minutes.</p>";
		} elseif ($order == "Veggie Sandwich") {
			echo "<p>Thanks for ordering the <strong>Veggie Sandwich</strong> from our online menu, your order will be ready for pickup in 22 minutes.</p>";
		} else {
			echo "<p><strong>First of all bro, you're a hacker. Please go back and try again without the hacks.</strong></p>";
		}
	?>

	<?php

		$order2 = "Ham Sandwich";
		
		switch ($order2) {
			case "Turkey Sandwich":
				echo "<p>Thanks for ordering the <strong>Turkey Sandwich</strong> from our online menu, your order will be ready for pickup in 30 minutes.</p>";
				break;
			
			case "Ham Sandwich":
				echo "<p>Thanks for ordering the <strong>Ham Sandwich</strong> from our online menu, your order will be ready for pickup in 36 minutes.</p>";
				break;

			case "Veggie Sandwich":
				echo "<p>Thanks for ordering the <strong>Veggie Sandwich</strong> from our online menu, your order will be ready for pickup in 22 minutes.</p>";
				break;
			
			default:
				echo "<p><strong>First of all bro, you're a hacker. Please go back and try again without the hacks.</strong></p>";
				break;
		}
	?>

</body>
</html>