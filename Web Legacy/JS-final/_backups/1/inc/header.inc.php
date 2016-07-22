<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
	<title>Troy.js | <?php echo $htmlTitle ?></title>
	<link href="css/sm-core-css.css" rel="stylesheet">
	<link href="css/sm-blue/sm-blue.css" rel="stylesheet">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" >
</head>
<body>
<div id="pagewrapper">
	<h1>Troy<span class="title-alt">.js</span></h1>
	<ul id="main-menu" class="sm sm-blue">
	  <li><a href="home.php" <?php if ($htmlTitle == "Home") {echo 'class="current"';} ?>><i class="fa fa-fw fa-home"></i> Home</a></li>
	  <li><a href="highcharts.php" <?php if ($htmlTitle == "Highcharts") {echo 'class="current"';} ?>><i class="fa fa-fw fa-line-chart"></i> Highcharts</a></li>
	  <li><a href="ajax.php" <?php if ($htmlTitle == "AJAX") {echo 'class="current"';} ?>><i class="fa fa-fw fa-refresh"></i> AJAX</a></li>
	  <li><a href="gallery.php" <?php if ($htmlTitle == "Gallery") {echo 'class="current"';} ?>><i class="fa fa-fw fa-picture-o"></i> Gallery</a></li>
	  <li><a href="form.php" <?php if ($htmlTitle == "Form") {echo 'class="current"';} ?>><i class="fa fa-fw fa-check"></i> Validation</a></li>
	  <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Credits</a>
	    <ul class="mega-menu">
	      <li>
	        <div style="width:250px;max-width:100%;">
            <a href="http://www.troyuyan.com/">Created by Troy Uyan</a>
            <a href="http://www.smartmenus.org/">SmartMenus</a>
            <a href="http://www.highcharts.com/">Highcharts</a>
            <a href="http://lokeshdhakar.com/projects/lightbox2/">Lightbox</a>
            <a href="http://jqueryvalidation.org/">jQ Validation</a>
            <a href="http://fortawesome.github.io/Font-Awesome/">Font Awesome</a>
					</div>
	      </li>
	    </ul>
	  </li><!--end mega menu-->
	</ul><!--end main-menu-->
	<div id="content">