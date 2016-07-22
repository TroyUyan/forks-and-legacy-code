<?php
	$level = "../";
	$htmltitle = "CSGO Profile";
	include $level . 'inc/header.inc.php';
?>

	<div id="csgo">

	<?php 
		/************************
		**** Dynamic Content ****
		************************/

		$totalWins = 161;
		$totalLosses = 91;
		$totalDraws = 30;

	?>

	<?php slide("whiteslide"); ?>

		<?php pagetitle("CS:GO Competitive Profile"); ?>

		<?php col(); ?>

			<h3>Player Info</h3>
			<p class="playerinfo">
				Name: <strong>Troy Uyan</strong><br>
				Nickname: <strong>T R :o Y</strong><br>
				Nation: <img src="http://troyuyan.com/img/flag/tr.png"> <strong>Turkey</strong><br>
				Rank: <img src="http://troyuyan.com/img/csgo/ranks/14_distinguishedmasterguardian.png" class="playerrank"> <strong><abbr title="Distinguished Master Guardian">D.M.G.</abbr></strong><br>
				Player Roles:
			</p>
			<?php 
				$items = array("<strong>Rifler</strong>", "<strong>Lead Entries</strong>", "<strong>Secondary Sniper</strong>");
				ul($items);
			?>
			
		<?php ecol(); ?>

		<?php col(); ?>

			<h3>Competition Info</h3>

			<p id="compname1"><strong>Rest in Tech <span class="main">&raquo;</span></strong></p>
			<ul id="complist1">
				<li>Playoff Tournaments</li>
				<li>Series Matches</li>
				<li>International Friendly Match</li>
			</ul>

			<p id="compname2"><strong>Competitive Matchmaking <span class="main">&raquo;</span></strong></p>
			<ul id="complist2">
				<li>Active Duty Maps</li>
				<li>Seasonal Operations</li>
				<li>Competitive Matchmaking</li>
			</ul>

			<p id="compname3"><strong>eCresent Festival <span class="main">&raquo;</span></strong></p>
			<ul id="complist3">
				<li>AWP Tournament (3v3)</li>
			</ul>

			<p id="compname4"><strong>E-Sports Entertainment <span class="main">&raquo;</span></strong></p>
			<ul id="complist4">
				<li>ESEA Pick-Up Game System</li>
			</ul>

		<?php ecol(); ?>

	<?php endslide(); ?>

	<?php slide("blackslide"); ?>

		<h2 class="center">Match Record</h2><br>

		<div id="totalrecord">
			<div id="recw" class="record">
				<p class="number"><strong><?php echo $totalWins ?></strong></p>
				<p class="subnumber">Wins</p>
			</div>

			<div id="recl" class="record">
				<p class="number"><strong><?php echo $totalLosses ?></strong></p>
				<p class="subnumber">Losses</p>
			</div>

			<div id="recd" class="record">
				<p class="number"><strong><?php echo $totalDraws ?></strong></p>
				<p class="subnumber">Draws</p>
			</div>
		</div><!--end totalrecord-->
		<p class="update"></p>

	<?php endslide(); ?>

	<?php slide("whiteslide"); ?>
		<h3 class="center">Achievements</h3>

		<?php col(); ?>
			<h4>Challenge Coins</h4>

			<p id="coinname5"><strong>Gold Breakout Coin <span class="main">&raquo;</span></strong></p>
			<ul id="coinlist5">
				<li>Summer 2014 Operation</li>
				<li>Operation Missions Completed: 15</li>
				<li>Match Wins: 11</li>
				<li>MVP Rounds: 50</li>
				<li>4-Kill Rounds: 3</li>
				<li>3-Kill Rounds: 18</li>	
			</ul>

			<p id="coinname4"><strong>Gold Phoenix Coin <span class="main">&raquo;</span></strong></p>
			<ul id="coinlist4">
				<li>Winter 2014 Operation</li>
				<li>Operation: 30 Hours</li>
				<li>Match Wins: 25</li>
				<li>MVP Rounds: 152</li>
				<li>5-Kill Rounds: 4</li>
				<li>4-Kill Rounds: 11</li>
				<li>3-Kill Rounds: 56</li>	
			</ul>

			<p id="coinname3"><strong>Gold Bravo Coin <span class="main">&raquo;</span></strong></p>
			<ul id="coinlist3">
				<li>Autumn 2013 Operation</li>
				<li>Operation: 32 Hours</li>
				<li>Match Wins: 42</li>
				<li>MVP Rounds: 251</li>
				<li>5-Kill Rounds: 4</li>
				<li>4-Kill Rounds: 23</li>
				<li>3-Kill Rounds: 127</li>	
			</ul>

			<p id="coinname2"><strong>Gold Payback Coin <span class="main">&raquo;</span></strong></p>
			<ul id="coinlist2">
				<li>Spring 2013 Operation</li>
				<li>Operation: 50 Hours</li>
			</ul>

			<p id="coinname1"><strong>5 Year Veteran Coin <span class="main">&raquo;</span></strong></p>
			<ul id="coinlist1">
				<li>CS Player for 5+ Years</li>
				<li>CS:GO - Started 2013</li>
				<li>CS:Source - Started 2006</li>
			</ul>

			<p id="coinname0"><strong>Tactical Awards <span class="main">&raquo;</span></strong></p>
			<ul id="coinlist0">
				<li>Gold Team Tactics Medal</li>
				<li>Gold Combat Skills Medal</li>
				<li>Gold Weapon Specialist Medal</li>
				<li>Gold Global Expertise Medal</li>
				<li>Gold AR and Demo Medal</li>
			</ul>

		<?php ecol(); ?>

		<?php col(); ?>
			<h4>Tournament Results</h4>
			<p>RiT April 2014 - <strong>2nd</strong> - <strong>$25.00</strong></p>
			<p>RiT USA vs Canada - <strong>Winners</strong></p>
			<p>RiT Series #7 - <strong>Winners</strong></p>
			<p>RiT Series #2 - Runners-up</p>
			<p>eCresent AWP Festival - 33rd to 64th</p>
		<?php ecol(); ?>

	<?php endslide(); ?>

	</div><!--end CSGO-->
	<p><!--bumper--></p>
<?php 
	include $level . 'inc/footer.inc.php';
?>