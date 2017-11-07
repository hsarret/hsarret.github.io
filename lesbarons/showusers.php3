<html>
<head><title>Création de membres</title></head>
<body>

<?php

// Connect to DB
$db = mysql_connect();
mysql_select_db("salvadom_db",$db);

// Creation et envoi de la requete
$query = "SELECT * FROM baron_users ORDER BY username";
$result = mysql_query($query);

// Recuperation des resultats
while($aUser = mysql_fetch_object($result))
{
  $Id = $aUser->iduser;
  $Name = $aUser->username;
  $Password = $aUser->password;

  echo "<tr>\n
  <td>Id : $Id</td>\n
  <td>Nom : $Name</td>\n
  <td>Password : $Password</td>\n

  </tr><BR>\n";
}
mysql_free_result($result);
	
// deconnect
mysql_close();

?>

</FORM>
</body>
</html>
<script>=



