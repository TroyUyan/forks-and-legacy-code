<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href='css/reset.min.css' rel='stylesheet' type='text/css'>

<?php 

if (isset($_GET['t'])) {
	$_SESSION['theme'] = $_GET['t'];
}

if (isset($_SESSION['theme'])) {
	
	if ($_SESSION['theme'] == 'b') {
		echo "<link href='css/style.css' rel='stylesheet' type='text/css' media='all'>";
	} elseif ($_SESSION['theme'] == 'g') {
		echo "<link href='css/style_green.css' rel='stylesheet' type='text/css' media='all'>";
	} elseif ($_SESSION['theme'] == 'r') {
		echo "<link href='css/style_red.css' rel='stylesheet' type='text/css' media='all'>";
	} elseif ($_SESSION['theme'] == 'p') {
		echo "<link href='css/style_purple.css' rel='stylesheet' type='text/css' media='all'>";
	}
	


} else {
	echo "<link href='css/style.css' rel='stylesheet' type='text/css' media='all'>";
}

?>



	<title>Troy Uyan<?php echo "$pagetitle"; ?></title>
</head>
<body>
	<div id="header">
		<div class="pagewrapper">
			<div id="titles">
				<h1>Troy Uyan</h1>
				<h2 class="titlehide">Web Developer and Designer</h2>
			</div><!-- end titles -->
			<div>
				<ul id="navlist">
					<li><a href="index.php"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a></li>
					<li><a href="portfolio.php"><i class="fa fa-code fa-fw"></i>&nbsp; Portfolio</a></li>
					<li><a href="experiments.php"><i class="fa fa-cloud fa-fw"></i>&nbsp; Experiments</a></li>
					<li><a href="contact.php"><i class="fa fa-comments fa-fw"></i>&nbsp; Contact</a></li>
				</ul>
			</div><!-- end nav -->
		</div><!--end PW-->
	</div><!-- end header-->
	<div id="content">
		<div class="pagewrapper">