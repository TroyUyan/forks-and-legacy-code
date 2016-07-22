<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php 

		#problem 2
		$letters = array();
		$letters = range('a', 'z');

		$i = 0;
		while ($letters[$i] != 'q') {
			echo "{$letters[$i]}";
			echo "<br/>";
			$i++;
		}
		echo "<br>I needed that break\n";
 	?>

	<!--problem 1-->
	<form method="post" action="">
		<br>
		<br>
		<select name="evennums">
			<?php
				for ($i=2; $i <= 100 ; $i=$i+2) { 
					echo "<option value=\"$i\">$i</option>\n";
				}
			?>
		</select>
	</form>


	<!--challenge, man!-->
	<br>
	<br>
	<table border="2" width="100">
	<?php
		for ($i=1; $i <= 7 ; $i++) { 
			echo "<tr>";

				for ($j=1; $j <= 7 ; $j++) { 
					echo "<td>" . ($i * $j) . "</td>";
				}
			echo "</tr>";
		}
	?>
</tabel>
	
	
</body>
</html>