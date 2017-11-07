<?php
# 
# PHP Calendar 1.0
# Developed by Paul Burney, March 2001
# web: http://paul.burney.ws/
# email: paul@burney.ws
# 
# Edit Event File
#

// form not submitted
if (!isset($submit)) {

	// open a connection to the database 
	$connection = mysql_connect($db_host, $db_user, $db_password);

	// formulate the SQL query - same as above
	$query = "SELECT * FROM " . $db_table . " WHERE pc_id=" . $id;

	// run the query on the database
	$result = mysql_db_query($db_database,$query ,$connection);

	while($row = mysql_fetch_array($result)) {

		$this_time = explode(":", $row["pc_time"]);
		$this_date = $row["pc_date"];
		$comment = htmlspecialchars($row["pc_comment"]);
		$hh = $this_time[0];
		$mm = $this_time[1];

	}

	// close connection
	mysql_close($connection);

	echo "
	<form action='" . $PHP_SELF ."' method='get'>

	<table border='1' cellpadding='4' cellspacing='0' align='center'>

		<tr>
			<td colspan='2' align='center'>
				<strong>" . date("D M d Y", mktime(0,0,0,$currMonth,$currDay,$currYear)) . "</strong>
			</td>
		</tr>

		<tr>
			<td>
				<em>Time:</em>
			</td>
			<td>
				<select name='hh'>";

	// drop-downs for the date and time 
	for ($x=0; $x<=23; $x++) {
		echo "<option value='" . sprintf("%02d", $x) .  "'";
		if (sprintf("%20d", $x) == $hh) { echo " selected";}
		echo ">" . sprintf("%02d", $x) . "</option>";
	}

	echo "</select>

	<select name='mm'>";
	
	for ($x=0; $x<=55; $x=$x+5) {
		echo "<option value='" . sprintf("%02d", $x) .  "'";
		if (sprintf("%02d", $x) == $mm) {echo " selected";}
		echo ">" . sprintf("%02d", $x) . "</option>";
	}

	echo "</select>

			</td>
		</tr>
		<tr>
			<td>
				<em>Description:</em>
			</td>
			<td>
				<textarea name='comment' rows='5' cols='30'>" . $comment . "</textarea>
			</td>
		</tr>
		<tr>
			<td colspan='2' align='center'>
				<input type='hidden' name='action' value='edit_event'>
				<input type='hidden' name='id' value='" . $id . "'>
				<input type='hidden' name='currYear' value='" . $currYear . "'>
				<input type='hidden' name='currMonth' value='" . $currMonth . "'>
				<input type='hidden' name='currDay' value='" . $currDay . "'>
				<input type='submit' name='submit' value='Edit Event'>
			</td>
		</tr>
	</table>

	</form>";

} else {

	// format time
	$this_time = $hh . ":" . $mm . ":00";

	// set up default description
	if ($comment == "") { $comment = "No information"; }

	// open a connection to the database 
	$connection = mysql_pconnect($db_host, $db_user, $db_password);

	// formulate the SQL query - same as above
	$query = "UPDATE " . $db_table . " SET pc_time='$this_time',pc_comment='$comment' WHERE pc_id=" . $id;

	// run the query on the database
	$result = mysql_db_query($db_database,$query ,$connection);

	// close connection
	mysql_close($connection);

	$new_location = $PHP_SELF . "?action=day_view&currYear=" . $currYear . "&currMonth=" . $currMonth . "&currDay=" . $currDay;

	echo "<p align='center'>Event Successfully Edited.  <a href='" . $new_location . "'>Return to Day View.</a></p>";

}

?>
