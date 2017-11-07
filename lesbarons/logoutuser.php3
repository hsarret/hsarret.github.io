<?php

// Connect to DB
$db = mysql_connect();
mysql_select_db("salvadom_db",$db);

// recupere la sessionID
// transparent dans les cookies, cookie = $LoginSessionId
//echo "Session lu dans les cookies : $LoginSessionId<BR>" ;

// On delete les sessions expirees
$currentTime = time();
$query = "DELETE FROM baron_sessions WHERE time < $currentTime";
$result = mysql_query($query);

// On delete la session en cours
$query = "DELETE FROM baron_sessions WHERE sessionid = '$LoginSessionId'";
$result = mysql_query($query);

include "logout_page.php3";

// Deconnexion de la base de donnees
mysql_close();

?>

