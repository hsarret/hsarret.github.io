<?php

// Connect to DB
$db = mysql_connect();
mysql_select_db("salvadom_db",$db);

// Search for the user
$query = "SELECT username FROM baron_users WHERE username = '$myuser'";
$result = mysql_query($query);

// A user with that name already exists ?
if ($row = mysql_fetch_row($result))
{
  // failure page
  include "adduser_fail.php3";
  exit();
}

// insert this user in database
$query = "INSERT INTO baron_users (username, password ) VALUES ('$myuser', '$mypassword')";
$result = mysql_query($query);

// success page
include "adduser_success.php3";

// Deconnexion de la base de donnees
mysql_close();

?>
