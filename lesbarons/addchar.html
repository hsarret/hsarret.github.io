<?

// Connect to DB
$db = mysql_connect();
mysql_select_db("salvadom_db",$db);

// recupere la sessionID
// transparent dans les cookies, cookie = $LoginSessionId

// On delete les sessions expirees
$currentTime = time();
$query = "DELETE FROM baron_sessions WHERE time < $currentTime";
$result = mysql_query($query);

// Cherche la session
$query = "SELECT * FROM baron_sessions WHERE sessionid = '$LoginSessionId'";
$result = mysql_query($query);

// session ouverte ?
if ( !( $aSession = mysql_fetch_object($result) ) )
{
  include "addchar_fail_session.php3";
  exit();
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

// On récupère le nom
$userName = $aUser->username;

// dump les infos
// echo "Name : $userName<BR>";
// echo "$pcName<BR>";
// echo "$pcRace<BR>";
// echo "$pcClass<BR>";
// echo "$pcDeity<BR>";
// echo "$pcLevel<BR>";
// echo "$pcAAEXP<BR>";
// echo "$pcAC<BR>";
// echo "$pcHP<BR>";
// echo "$pcIsMain<BR>";
// echo "$pcHasEpic<BR>";
// echo "$pcMagelo<BR>";
// echo "$pcBaking<BR>";
// echo "$pcBlacksmithing<BR>";
// echo "$pcBrewing<BR>";
// echo "$pcFletching<BR>";
// echo "$pcJewellery<BR>";
// echo "$pcPottery<BR>";
// echo "$pcResearch<BR>";
// echo "$pcTailoring<BR>";
// echo "$pcTinkering<BR>";

// cree les bools
if ($pcIsMain == "Oui")
  $pcBoolIsMain = 1;
else
  $pcBoolIsMain = 0;

if ($pcHasEpic == "Oui")
  $pcBoolHasEpic = 1;
else
  $pcBoolHasEpic = 0;
  
// echo "$pcBoolIsMain<BR>";
// echo "$pcBoolHasEpic<BR>";

// Search for the char
$query = "SELECT * FROM baron_chars WHERE charName = '$pcName'";
$result = mysql_query($query);

// A char with that name already exists ?
if ($row = mysql_fetch_row($result))
{
  // failure page
  include "addchar_fail_alreadyexist.php3";
  exit();
}

$currentTime = time();

// insert this user in database
$query =          "INSERT INTO baron_chars ( memberName, charName, race,";
$query = $query . "class, deity, xpLevel, aaxpPoints, ac, hp, isMain,isOfficier,";
$query = $query . "isGuildMaster,hasEpic,magelo,tsAlchemy,tsBaking,tsBlacksmithing,tsBrewing,";
$query = $query . "tsFishing,tsFletching,tsJewellery,tsPottery,tsResearch,tsTailoring,tsTinkering,timeOfLastUpdate) ";
$query = $query . "VALUES ('$userName', '$pcName', '$pcRace', '$pcClass', '$pcDeity', $pcLevel,";
$query = $query . "$pcAAEXP, $pcAC, $pcHP, $pcBoolIsMain, 0, 0, $pcBoolHasEpic, $pcMagelo, $pcAlchemy, $pcBaking,";
$query = $query . "$pcBlacksmithing, $pcBrewing, $pcFishing, $pcFletching, $pcJewellery, $pcPottery, $pcResearch,";
$query = $query . "$pcTailoring, $pcTinkering, $currentTime )";

//echo "$query";

$result = mysql_query($query);
if (!$result)
{
  include "addchar_fail_fields.php3";
  exit();
}

// Affiche le message de succes
include "addchar_success.php3";

include "footer.php3";
?>
