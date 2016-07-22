<!doctype html>
<html lang="en">
<head>
	<title>TroyUyan | <?php echo "$htmltitle";?></title>
	<meta charset="UTF-8">
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,600'>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $level ?>css/style.css">
	<?php
		switch ($htmltitle) {

			case 'CSGO Profile':
				echo '<link rel="stylesheet" type="text/css" href="../css/csgoprofile.css">' . "\n";
				break;
				
			case 'World Cup Box Fun':
					echo '<link rel="stylesheet" type="text/css" href="../css/worldcupboxes.css">' . "\n";
					break;	

		} // end switch	
	?>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-56791233-1', 'auto');
		ga('require', 'displayfeatures');
		ga('send', 'pageview');
	</script>
</head>
<body>
	<div id="top"></div>
	<div id="header">
		<div class="pagewrapper">
			<h1><a href="<?php echo $level;?>index.php" class="titlelink">Troy<span class="main">Uyan</span></a></h1>
			<div id="nav">
				<ul>
					<li><a href="<?php echo $level;?>portfolio.php">Portfolio</a></li>
					<li><a href="<?php echo $level;?>experiments.php">Experiments</a></li>
					<li><a href="<?php echo $level;?>about.php">About</a></li>
					<li><a href="<?php echo $level;?>contact.php">Contact</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div><!--end pw-->
	</div><!--end header-->
	<div id="content" class="clear">