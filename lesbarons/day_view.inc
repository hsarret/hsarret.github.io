<?php
# 
# PHP Calendar 1.0
# Developed by Paul Burney, March 2001
# web: http://paul.burney.ws/
# email: paul@burney.ws
# 
# Day View File
#

// format date for entry into database
$this_date = $currYear . "-" . sprintf("%02d", $currMonth) . "-" . sprintf("%02d", $currDay);

echo "
<table border='1' cellpadding='4' cellspacing='0' align='center'>

<tr>
	<td colspan='3' align='center'>
		<strong>" . date("D M d Y", mktime(0,0,0,$currMonth,$currDay,$currYear)) . "</strong>
	</td>
</tr>";

// open a connection to the database 
$connection = mysql_pconnect($db_host, $db_user, $db_password);

// formulate the SQL query - same as above
$query = "SELECT * FROM " . $db_table . " WHERE pc_date='$this_date' ORDER BY pc_time";

// run the query on the database
$result = mysql_db_query($db_database,$query,$connection);

// if result
if(mysql_num_rows($result) > 0) {

	echo "
	<tr>
		<td align='center'>
			<strong>Time</strong>
		</td>
		<td align='left'>
			<strong>Description</strong>
		</td>
		<td align='center'>
			<strong>Options</strong>
		</td>
	</tr>";


	// get the list of appointments

	while($row = mysql_fetch_array($result)) {

		$this_time = $row["pc_time"];
		$comment = htmlspecialchars($row["pc_comment"]);
		$id = $row["pc_id"];

		echo "
		<tr>
			<td align='center' valign='top'>" . substr($this_time,0,5) . "&nbsp;</td>
			<td align='left' valign='top'>" . $comment . "&nbsp;</td>
			<td align='center' valign='top'>
				<a href='" . $PHP_SELF . "?action=edit_event&id=" . $id . "&currYear=" . $currYear . "&currMonth=" . $currMonth . "&currDay=" . $currDay ."'>edit</a>&nbsp; | &nbsp;
				<a href='" . $PHP_SELF . "?action=delete_event&id=" . $id . "&currYear=" . $currYear . "&currMonth=" . $currMonth . "&currDay=" . $currDay . "'>delete</a>
			</td>
		</tr>";

	}

	// close connection
	mysql_close($connection);

} else {

	echo "
	<tr>
		<td align='center' colspan='3'>
			<em>Nothing scheduled</em>
		</td>
	</tr>";

}

echo "
	<tr>
		<td align='left'>
			<a href='" . $PHP_SELF . "?action=month_view&currYear=" . $currYear . "&currMonth=" . $currMonth . "&currDay=" . $currDay . "'>Month View</a>
		</td>
		<td>&nbsp;</td>
		<td align='right'>
			<a href='" . $PHP_SELF . "?action=add_event&currYear=" . $currYear . "&currMonth=" . $currMonth . "&currDay=" . $currDay . "'>Add Event</a>
		</td>
	</tr>

</table>";
