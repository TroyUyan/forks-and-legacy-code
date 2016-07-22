<?php include('/inc/header.php') ?>


	
<?php 



$num1 = 4;
$num2 = 7;
$num3 = 2;

function mathstuff($num1,$num2,$num3,$type)
{
	switch ($type) {
		case 'S':
			$answer = $num1 + $num2 + $num3;
			return $answer;
			break;

		case 'P':
			$answer = $num1 * $num2 * $num3;
			return $answer;
			break;
		
		default:
			echo "<p>Wrong type!</p>";
			break;
	}
}

$type = 'S';
$answer = mathstuff($num1,$num2,$num3,$type);
echo "<p>$answer</p>";

$type = 'P';
$answer = mathstuff($num1,$num2,$num3,$type);
echo "<p>$answer</p>";


echo "{$_SERVER["REQUEST_METHOD"]}";

 ?>








<?php include('/inc/footer.php') ?>