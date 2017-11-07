<?php
# 
# PHP Calendar 1.0
# Developed by Paul Burney, March 2001
# web: http://paul.burney.ws/
# email: paul@burney.ws
# 
# Delete Event File
#

// open a connection to the database 
$connection = mysql_pconnect($db_host, $db_user, $db_password);

// formulate the SQL query
$query = "DELETE FROM " . $db_table . " WHERE pc_id=" . $id;

// run the query on the database
$result = mysql_db_query($db_database,$query,$connection);

// close connection
mysql_close($connection);

$new_location = $PHP_SELF . "?action=day_view&currYear=" . $currYear . "&currMonth=" . $currMonth . "&currDay=" . $currDay;

echo "<p align='center'>Event Successfully Deleted.  <a href='" . $new_location . "'>Return to Current Day View.</a></p>";

?>
