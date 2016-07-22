<?php 
	$htmlTitle = "Highcharts";
	include 'inc/header.inc.php';
?>

	<h2>Sim Racing Stats</h2>

	<p>Troy Uyan's simulation racing stats from all national and international events as of December 2014.</p>

	<p><strong>19 Drivers Championships and 32 Team Championships</strong></p>
	<p>104 Wins, 238 Podiums, 396 Races, 31 Poles, 50 Fast Laps, 7682 Points</p>

	<div class="clear"></div><p style="margin:50px;"> </p>

	<div id="winpercent" style="width: 425px; height: 300px; margin: 25 auto;float:left;"></div>
	<div id="podiumpercent" style="width: 425px; height: 300px; margin: 25 auto;float:left;"></div>

	<div class="clear"></div><p style="margin:50px;"> </p>

	<div id="polepercent" style="width: 425px; height: 300px; margin: 25 auto;float:left;"></div>
	<div id="fastlappercent" style="width: 425px; height: 300px; margin: 25 auto;float:left;"></div>

	<div class="clear"></div>
	<p style="margin:50px;">Championships, Wins, Podiums and Races by Season</p>

	<div id="seasonline" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

	<div class="clear"></div><p style="margin:50px;"> </p>

	<div id="champline" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

	<div class="clear"></div><p style="margin:50px;"> </p>

<?php 
	include 'inc/footer.inc.php';
?>