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
  include "modifychar_fail_session.php3";
  exit();
}

// recupere l ID du user
$idUser = $aSession->iduser;

// on le trouve dans la base
$query = "SELECT * FROM baron_users WHERE iduser = $idUser";
$result = mysql_query($query);
if ( !($aUser = mysql_fetch_object($result)) )
{
  include "modifychar_fail_user.php3";
  exit();
}

// On r�cup�re le nom
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

if ($pcSeb == "Oui")
  $pcBoolSeb = 1;
else
  $pcBoolSeb = 0;

if ($pcHS == "Oui")
  $pcBoolHS = 1;
else
  $pcBoolHS = 0;

if ($pcVP == "Oui")
  $pcBoolVP = 1;
else
  $pcBoolVP = 0;

if ($pcST == "Oui")
  $pcBoolST = 1;
else
  $pcBoolST = 0;

if ($pcPoVPoS == "Oui")
  $pcBoolPoVPoS = 1;
else
  $pcBoolPoVPoS = 0;

if ($pcBoT == "Oui")
  $pcBoolBoT = 1;
else
  $pcBoolBoT = 0;

if ($pcHoHxp == "Oui")
  $pcBoolHoHxp = 1;
else
  $pcBoolHoHxp = 0;

if ($pcLoTT == "Oui")
  $pcBoolLoTT = 1;
else
  $pcBoolLoTT = 0;

// echo "$pcBoolIsMain<BR>";
// echo "$pcBoolHasEpic<BR>";

// Search for the char
$query = "SELECT * FROM baron_chars WHERE charName = '$oldCharName' FOR UPDATE";
$result = mysql_query($query);

// A char with that name already exists ?
if ( !($aChar = mysql_fetch_object($result)))
{
  // failure page
  include "modifychar_fail_notfound.php3";
  exit();
}

if ($aChar->memberName != $userName)
{
  // failure page
  include "modifychar_fail_notfound.php3";
  exit();
}

$currentTime = time();

// update this char in database
$query =          "UPDATE baron_chars SET memberName='$userName', charName='$pcName', race='$pcRace',";
$query = $query . "class='$pcClass', deity='$pcDeity', xpLevel=$pcLevel, aaxpPoints=$pcAAEXP, ac=$pcAC, hp=$pcHP, isMain=$pcBoolIsMain,";
$query = $query . "hasEpic=$pcBoolHasEpic,Seb=$pcBoolSeb,HS=$pcBoolHS,VP=$pcBoolVP,ST=$pcBoolST,PoVPoS=$pcBoolPoVPoS,BoT=$pcBoolBoT,HoHxp=$pcBoolHoHxp,LoTT=$pcBoolLoTT,magelo=$pcMagelo,tsAlchemy=$pcAlchemy,tsBaking=$pcBaking,tsBlacksmithing=$pcBlacksmithing,tsBrewing=$pcBrewing,";
$query = $query . "tsFishing=$pcFishing,tsFletching=$pcFletching,tsJewellery=$pcJewellery,tsPottery=$pcPottery,tsResearch=$pcResearch,tsTailoring=$pcTailoring,";
$query = $query . "tsTinkering=$pcTinkering,timeOfLastUpdate=$currentTime WHERE charName='$oldCharName'";

//echo "$query";

$result = mysql_query($query);
if (!$result)
{
  include "modifychar_fail_fields.php3";
  exit();
}

// Affiche le message de succes
include "modifychar_success.php3";

include "footer.php3";
?>