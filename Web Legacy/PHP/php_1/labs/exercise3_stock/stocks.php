<?php include('/inc/header.php') ?>

<h1>Stock Market Prices</h1>
<h2>CTEC 127 - Troy Uyan</h2>

<!--
example table markup:
<table border="1">
     <tr>
          <th>Header 1</th>
          <th>Header 2</th>
     </tr>
     <tr>
          <td>row 1, cell 1</td>
          <td>row 1, cell 2</td>
     </tr>
     <tr>
          <td>row 2, cell 1</td>
          <td>row 2, cell 2</td>
     </tr>
</table>
-->

<?php

// arrays for companies and weekly prices
$CompanyArray = array('IBM', 'APPL', 'MSFT', 'CRM', 'CSCO');
$week1prices = array('194.11', '500', '27.00', '150.23', '19.00');
$week2prices = array('195.00', '520', '26.00', '149.22', '20.15');
$week3prices = array('192.00', '510', '25.00', '148.18', '20.00');
$week4prices = array('196.01', '511', '27.00', '155.99', '21.07');

// main function to create the table
function table($type){
     // switch statement to take in arguement and echo html tag
     switch ($type) {
     	case 'sta':
     		echo "<table border=\"1\">\n";
     		break;
     	case 'eta':
     		echo "</table>\n";
     		break;

     	case 'str':
     		echo "<tr>\n";
     		break;
     	case 'etr':
     		echo "</tr>\n";
     		break;

     	case 'sth':
     		echo "<th>\n";
     		break;
     	case 'eth':
     		echo "</th>\n";
     		break;

     	case 'std':
     		echo "<td>\n";
     		break;
     	case 'etd':
     		echo "</td>\n";
     		break;

     	default:
     		break;
     }
   }

// start table
table('sta');
	// table header-row
	table('str');
		//first column
		table('sth');
			echo "<span style=\"color:white;\">Price at End</span>\n";
		table('eth');

		// each company column
		foreach ($CompanyArray as $key => $value) {
			table('sth');
				echo "<span style=\"color:white;\">$value</span>\n";
			table('eth');
		}		
	table('etr');

	// table rows
	table('str');
		//first column
		table('std');
			echo "<span style=\"font-weight:bold;\">Week 1</span>\n";
		table('etd');

		//cols 2-6
		foreach ($week1prices as $key => $value) {
			table('std');
				echo "$value\n";
			table('etd');
		}		
	table('etr');

	table('str');
		//first column
		table('std');
			echo "<span style=\"font-weight:bold;\">Week 2</span>\n";
		table('etd');

		//cols 2-6
		foreach ($week2prices as $key => $value) {
			table('std');
				echo "$value\n";
			table('etd');
		}		
	table('etr');

	table('str');
		//first column
		table('std');
			echo "<span style=\"font-weight:bold;\">Week 3</span>\n";
		table('etd');

		//cols 2-6
		foreach ($week3prices as $key => $value) {
			table('std');
				echo "$value\n";
			table('etd');
		}		
	table('etr');

	table('str');
		//first column
		table('std');
			echo "<span style=\"font-weight:bold;\">Week 4</span>\n";
		table('etd');

		//cols 2-6
		foreach ($week4prices as $key => $value) {
			table('std');
				echo "$value\n";
			table('etd');
		}		
	table('etr');

// end table
table('eta');

?>



<?php include('/inc/footer.php') ?>