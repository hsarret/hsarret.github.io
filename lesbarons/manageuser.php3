<?
  include "banner.php3";
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="styles.css" type="text/css">
</head>
<body bgcolor="#091147" text="#000000" topmargin="20">

<table width="913" border="0" height="34" cellspacing="0">
  <tr>
    <td background="title_left.jpg" width="20" border="0">
      <div align="left"><font size="3"></font></div>
    </td>
    <td background="title_middle.jpg" width="860">
      <div align="left"><font color="#FFFFFF" size="3"><b><span class="Tahoma14">Gestion de compte</span></b></font> </div>
    </td>
    <td background="title_right.jpg" width="28">
      <div align="left"><font size="1"><font size="2"><font size="3"></font></font></font></div>
    </td>
  </tr>
</table>

<span class="Tahoma14"><font color="#FFFFFF"><div align=left>
<b>
<br>
Personnages :
</b>
<br>
<br>

<?

// Connect to DB
$db = mysql_connect();
mysql_select_db("salvadom_db",$db);

// recupere la sessionID
// transparent dans les cookies, cookie = $LoginSessionId

// Cherche la session
$query = "SELECT * FROM baron_sessions WHERE sessionid = '$LoginSessionId'";
$result = mysql_query($query);

// session ouverte ?
if ( !( $aSession = mysql_fetch_object($result) ) )
{
  include "addchar_fail_session.php3";
  return;
}

// recupere l ID du user
$idUser = $aSession->iduser;

// on le trouve dans la base
$query = "SELECT * FROM baron_users WHERE iduser = $idUser";
$result = mysql_query($query);
if ( !($aUser = mysql_fetch_object($result)) )
{
  include "addchar_fail_user.php3";
  exit();
}

// Creation et envoi de la requete
$memberName = $aUser->username;
$query = "SELECT * FROM baron_chars WHERE memberName = '$memberName' ORDER BY charName";
$result = mysql_query($query);

// Recuperation des resultats
$nbPersonnages=0;

while($aChar = mysql_fetch_object($result))
{
  $nbPersonnages++;
  
  $charName = $aChar->charName;
  $charRace = $aChar->race;
  $charClass = $aChar->class;
  $charLevel = $aChar->xpLevel;
  
  echo "<font color=\"#C0C0FF\"><b>$charName </b>($charRace $charClass) lvl $charLevel  </font>";
  echo "<b>";

//  $urlToEncode = "form_modifychar.php3?pcCharName=$charName";
//  $urlToEncode = urlencode($urlToEncode);

  $urlToEncode = "form_modifychar.php3?pcCharName=";
  $urlToEncode = $urlToEncode.urlencode($charName);

  echo "<a href=\"$urlToEncode\" class=\"Tahoma10\" target=\"main\"><font color=\"#C0C0C0\">Modifier</font></a>";
  echo "<font class=\"Tahoma10\" color=\"#C0C0C0\"> - </font>";
  
  $urlToEncode = "form_deletechar.php3?pcCharName=$charName";
  //  $urlToEncode = urlencode($urlToEncode);

  echo "<a href=\"$urlToEncode\" class=\"Tahoma10\" target=\"main\"><font color=\"#C0C0C0\">Supprimer</font></a>";
  echo "</b>";
  echo "<br>";
}

if (!$nbPersonnages)
{
  echo "<font color=\"#C0C0FF\"><b><i>Aucun personnage pour l'instant...</i></b></font>";
}

mysql_free_result($result);

// deconnect
mysql_close();

?>

</div>
</font>
</span>

<span class="Tahoma10"><font color="#FFFFFF"><div align=left>
<b>
<br>
<a href="form_addchar.php3" class="Tahoma10"><font color="#C0C0C0">Ajouter un nouveau personnage</font></a><br>
</b>
</div>
</font>
</span>

<br>
<br>

</body>
</html>


<?
  include "footer.php3";
?>
