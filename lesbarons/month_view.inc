<?php
# 
# PHP Calendar 1.0
# Developed by Paul Burney, March 2001
# web: http://paul.burney.ws/
# email: paul@burney.ws
# 
# Month View File
#

// set up some variables to identify the month, date and year to display
if(!isset($currYear)) {$currYear = date("Y");}
if(!isset($currMonth)) {$currMonth = date("n");}
if(!isset($currDay)) {$currDay = date("j");}

// if leap year, modify $totaldays array appropriately
if (date("L", mktime(0,0,0,$currMonth,1,$currYear))) {$totalDays[2] = 29;}

// number of days in each month

$totalDays = array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

// set up variables to display previous and next months correctly

// defaults for previous month
$prevMonth = $currMonth-1;
$prevYear = $currYear;

// if January, decrement year and set month to December
if ($prevMonth < 1) {
	$prevMonth = 12;
	$prevYear--;
}	

// defaults for next month
$nextMonth = $currMonth+1;
$nextYear = $currYear;

// if December, increment year and set month to January
if ($nextMonth > 12) {
	$nextMonth = 1;
	$nextYear++;
}	

// get down to displaying the calendar
// find out which day the first of the month falls on
$firstDayOfMonth = date("w", mktime(0,0,0,$currMonth,1,$currYear));

// open a connection to the database 
$connection = mysql_pconnect($db_host, $db_user, $db_password);

// formulate the SQL query - same as above
$query = "SELECT DISTINCT pc_date FROM " . $db_table . " WHERE pc_date >= '" . $currYear . "-" . sprintf("%02d", $currMonth) . "-01' AND pc_date <= '" . $currYear . "-" . sprintf("%02d", $currMonth) . "-" . $totalDays[$currMonth] . "'";

// run the query on the database
$result = mysql_db_query($db_database,$query ,$connection);

$x=0;
$dateList=array();
if(mysql_num_rows($result) > 0) {

	while($row = mysql_fetch_array($result)) {
		$dates = explode("-", $row["pc_date"]);
		$dateList[$x] = $dates[2];
		$x++;
	}

}

// close connection
mysql_close($connection);


echo "
<table border='1' cellpadding='4' cellspacing='0' align='center'>
<font color = \"#ffffff\">

<tr" . $header_cell . ">
	<td align='center'><a href='" . $PHP_SELF . "?action=month_view&currMonth=" . $prevMonth . "&currYear=" . $prevYear . "'>&lt;&lt;</a></td>

	<td align='center' colspan='5'><font color=\"#FFFFFF\"><strong>" . $months[$currMonth] . " " . $currYear . "</strong></font></td>

	<td align='center'><a href='" . $PHP_SELF . "?action=month_view&currMonth=" . $nextMonth . "&currYear=" . $nextYear ."'>&gt;&gt;</a></td>
</tr>


<tr>";

for ($x=0; $x<7; $x++) { 
	echo "<td><font color=\"#FFFFFF\">" . substr($days[$x],0,3) . "</font></td>"; 
}

echo "
</tr>
<tr>";

$rowCount = 0;

for ($x=1; $x<=$firstDayOfMonth; $x++) {
	$rowCount++;
	echo "<td" . $invalid_day_cell . ">&nbsp;</td>";
}

$dayCount=1;

while ($dayCount <= $totalDays[$currMonth]) {

	$at1 = '';
	$at2 = '';
	
	if ($rowCount % 7 == 0 && $rowCount >= 7) {
		echo "</tr><tr>";
	}

	for ($y=0; $y < sizeof($dateList); $y++) {

		if ($dateList[$y] == $dayCount) {
		
			$at1 = '<strong><font color="#FFFFFF">*';
			$at2 = '*</font></strong>';
		
		}
		
	}

	if ($dayCount == date("j") && $currYear == date("Y") && $currMonth == date("n")) {

		echo "<td align='center'" . $current_day_cell . ">
			" . $at1 . "<a href='" . $PHP_SELF . "?action=day_view&currYear=" . $currYear . "&currMonth=" . $currMonth . "&currDay=" . $dayCount . "'>" .  $dayCount .  "</a>" . $at2 . "
		</td>";

	} elseif ($at1 != '') {

		echo "<td align='center'" . $event_day_cell . ">
			" . $at1 . "<a href='" . $PHP_SELF . "?action=day_view&currYear=" . $currYear . "&currMonth=" . $currMonth . "&currDay=" . $dayCount . "'>" . $dayCount . "</a>" . $at2 . "
		</td>";

	} else {

		echo "<td align='center'" . $normal_day_cell . ">
			" . $at1 . "<a href='" . $PHP_SELF . "?action=day_view&currYear=" . $currYear . "&currMonth=" . $currMonth . "&currDay=" . $dayCount . "'>" . $dayCount . "</a>" . $at2 . "
		</td>";

	}

	$dayCount++;
	$rowCount++;

}

while ($rowCount % 7 != 0) {
	echo "<td" . $invalid_day_cell . ">&nbsp;</td>";
	$rowCount++;
}

echo "</tr>

<tr>
<td align='center' colspan='7'>

<a href='" . $PHP_SELF . "?action=month_view'>Mois en cours</a>

</td>
</tr>

</font>
</table>";

?>

