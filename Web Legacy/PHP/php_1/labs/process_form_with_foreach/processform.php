<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Check for Post</title>
</head>
<body>

	<?php

		if($_SERVER['REQUEST_METHOD'] !== "POST"){
			echo "GET the heck off my site!";
			exit;
		}

		foreach($_POST as $key => $value){



			echo "<h2>The key is $key</h2>";

			if(is_array($value)){
				$count = count($value);
				for($i=0;$i<$count;$i++){
					echo "<span style=\"color:red;\">{$value[$i]}</span><BR>";
				}
			} else {
			echo "<p>The value is <span style=\"color:red;\">$value</span></p>";
			}
		}
	?>
	
</body>
</html>