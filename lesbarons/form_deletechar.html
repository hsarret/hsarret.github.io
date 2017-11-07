<?php

  include "banner.php3";

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

// On récupère le nom
$userName = $aUser->username;

// On cherche le perso dans la liste des persos
$query = "SELECT * FROM baron_chars WHERE charName = '$pcCharName'";
$result = mysql_query($query);

// A char with that name already exists ?
if ( !($aChar = mysql_fetch_object($result)) )
{
  // failure page
  include "modifychar_fail_notfound.php3";
  exit();
}

if ( $aChar->memberName != $userName )
{
  // failure page
  include "modifychar_fail_notfound.php3";
  exit();
}

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
      <div align="left"><font color="#FFFFFF" size="3"><b><span class="Tahoma14">Suppression de personnage</span></b></font> </div>
    </td>
    <td background="title_right.jpg" width="28">
      <div align="left"><font size="1"><font size="2"><font size="3"></font></font></font></div>
    </td>
  </tr>
</table>

<span class="Tahoma14"><font color="#FFFFFF"><div align=left>
<b>


<?
   echo "<FORM Method=\"GET\" Action=\"deletechar.php3\">";

   echo "<INPUT type=\"hidden\" size=32 name=oldCharName value=\"$pcCharName\">";

   echo "Nom du personnage : <INPUT type=text size=32 name=pcName value=\"$pcCharName\"><BR><br>";

   // ********************************************************************

   echo 'Race : <select name=pcRace>';

   if ($aChar->race == "Barbarian")
     echo '<option value="Barbarian" selected>Barbarian';
   else
     echo '<option value="Barbarian">Barbarian';

   if ($aChar->race == "Dark elf")
     echo '<option value="Dark elf" selected>Dark elf';
   else
     echo '<option value="Dark elf">Dark elf';

   if ($aChar->race == "Dwarf")
     echo '<option value="Dwarf" selected>Dwarf';
   else
     echo '<option value="Dwarf">Dwarf';

   if ($aChar->race == "Erudite")
     echo '<option value="Erudite" selected>Erudite';
   else
     echo '<option value="Erudite">Erudite';

   if ($aChar->race == "Gnome")
     echo '<option value="Gnome" selected >Gnome';
   else
     echo '<option value="Gnome">Gnome';

   if ($aChar->race == "Half-elf")
     echo '<option value="Half-elf" selected>Half-elf';
   else
     echo '<option value="Half-elf">Half-elf';

   if ($aChar->race == "Halfling")
     echo '<option value="Halfling" selected>Halfling';
   else
     echo '<option value="Halfling">Halfling';

   if ($aChar->race == "Human")
	 echo '<option value="Human" selected>Human';
   else
	 echo '<option value="Human">Human';

   if ($aChar->race == "Iksar")
	 echo '<option value="Iksar" selected>Iksar';
   else
	 echo '<option value="Iksar">Iksar';

   if ($aChar->race == "Ogre")
     echo '<option value="Ogre" selected>Ogre';
   else
     echo '<option value="Ogre">Ogre';

   if ($aChar->race == "Vah Shir")
     echo '<option value="Vah Shir">Vah Shir';
   else
     echo '<option value="Vah Shir">Vah Shir';

   if ($aChar->race == "Wood Elf")
     echo '<option value="Wood Elf">Wood Elf';
   else
     echo '<option value="Wood Elf">Wood Elf';

   echo '</select><br>';

   // ********************************************************************

   echo 'Classe : <select name=pcClass>';

	if ($aChar->class == "Bard")
	  echo '<option value="Bard" selected>Bard';
	else
	  echo '<option value="Bard">Bard';

    if ($aChar->class == "Beastloard")
	  echo '<option value="Beastloard" selected>Beastloard';
	else
	  echo '<option value="Beastloard">Beastloard';

    if ($aChar->class == "Cleric")
	  echo '<option value="Cleric" selected>Cleric';
	else
	  echo '<option value="Cleric">Cleric';

    if ($aChar->class == "Druid")
	  echo '<option value="Druid" selected>Druid';
	else
	  echo '<option value="Druid">Druid';

    if ($aChar->class == "Enchanter")
	  echo '<option value="Enchanter" selected>Enchanter';
	else
	  echo '<option value="Enchanter">Enchanter';

    if ($aChar->class == "Magician")
	  echo '<option value="Magician" selected>Magician';
	else
	  echo '<option value="Magician">Magician';

    if ($aChar->class == "Monk")
	  echo '<option value="Monk" selected>Monk';
	else
	  echo '<option value="Monk">Monk';

    if ($aChar->class == "Necromancer")
	  echo '<option value="Necromancer" selected>Necromancer';
	else
	  echo '<option value="Necromancer">Necromancer';

    if ($aChar->class == "Paladin")
	  echo '<option value="Paladin" selected>Paladin';
	else
	  echo '<option value="Paladin">Paladin';

    if ($aChar->class == "Ranger")
	  echo '<option value="Ranger" selected>Ranger';
	else
	  echo '<option value="Ranger">Ranger';

    if ($aChar->class == "Rogue")
	  echo '<option value="Rogue" selected>Rogue';
	else
	  echo '<option value="Rogue">Rogue';

    if ($aChar->class == "Shadowknight")
	  echo '<option value="Shadowknight" selected>Shadowknight';
	else
	  echo '<option value="Shadowknight">Shadowknight';

    if ($aChar->class == "Shaman")
	  echo '<option value="Shaman" selected>Shaman';
	else
	  echo '<option value="Shaman">Shaman';

    if ($aChar->class == "Warrior")
	  echo '<option value="Warrior" selected>Warrior';
	else
	  echo '<option value="Warrior">Warrior';

    if ($aChar->class == "Wizard")
	  echo '<option value="Wizard" selected>Wizard';
	else
	  echo '<option value="Wizard">Wizard';

    echo '</select><br>';

    // ********************************************************************

    echo 'Déité : <select name=pcDeity>';

    if ($aChar->deity == "Agnostic")
	   echo '<option value="Agnostic" selected>Agnostic';
	 else
	   echo '<option value="Agnostic">Agnostic';

    if ($aChar->deity == "Bertoxxulus")
	   echo '<option value="Bertoxxulus" selected>Bertoxxulus';
	 else
	   echo '<option value="Bertoxxulus">Bertoxxulus';

    if ($aChar->deity == "Brell Serilis")
	   echo '<option value="Brell Serilis" selected>Brell Serilis';
	 else
	   echo '<option value="Brell Serilis">Brell Serilis';

    if ($aChar->deity == "Bristlebane")
	   echo '<option value="Bristlebane" selected>Bristlebane';
	 else
	   echo '<option value="Bristlebane">Bristlebane';

    if ($aChar->deity == "Cazic Thule")
	   echo '<option value="Cazic Thule" selected>Cazic Thule';
	 else
	   echo '<option value="Cazic Thule">Cazic Thule';

    if ($aChar->deity == "Erollisi Marr")
	   echo '<option value="Erollisi Marr" selected>Erollisi Marr';
	 else
	   echo '<option value="Erollisi Marr">Erollisi Marr';

    if ($aChar->deity == "Innoruuk")
	   echo '<option value="Innoruuk" selected>Innoruuk';
	 else
	   echo '<option value="Innoruuk">Innoruuk';

    if ($aChar->deity == "Karana")
	   echo '<option value="Karana" selected>Karana';
	 else
	   echo '<option value="Karana">Karana';

    if ($aChar->deity == "Mithaniel Marr")
	   echo '<option value="Mithaniel Marr" selected>Mithaniel Marr';
	 else
	   echo '<option value="Mithaniel Marr">Mithaniel Marr';

    if ($aChar->deity == "Prexus")
	   echo '<option value="Prexus" selected>Prexus';
	 else
	   echo '<option value="Prexus">Prexus';

    if ($aChar->deity == "Quellious")
	   echo '<option value="Quellious" selected>Quellious';
	 else
	   echo '<option value="Quellious">Quellious';

    if ($aChar->deity == "Rallos Zek")
	   echo '<option value="Rallos Zek" selected>Rallos Zek';
	 else
	   echo '<option value="Rallos Zek">Rallos Zek';

    if ($aChar->deity == "Rodcet Nife")
	   echo '<option value="Rodcet Nife" selected>Rodcet Nife';
	 else
	   echo '<option value="Rodcet Nife">Rodcet Nife';

    if ($aChar->deity == "Solusek Ro")
	   echo '<option value="Solusek Ro" selected>Solusek Ro';
	 else
	   echo '<option value="Solusek Ro">Solusek Ro';

    if ($aChar->deity == "The Tribunal")
	   echo '<option value="The Tribunal" selected>The Tribunal';
	 else
	   echo '<option value="The Tribunal">The Tribunal';

    if ($aChar->deity == "Tunare")
	   echo '<option value="Tunare" selected>Tunare';
	 else
	   echo '<option value="Tunare">Tunare';

    if ($aChar->deity == "Veeshan")
	   echo '<option value="Veeshan" selected>Veeshan';
	 else
	   echo '<option value="Veeshan">Veeshan';

     echo '</select><br>';

     echo '<br>';

echo "Level : <INPUT type=range min=1 max=60 name=pcLevel size=4 value=$aChar->xpLevel><BR>";

echo "Points d'AA EXP : <INPUT type=range min=0 max=1000 name=pcAAEXP size=4 value=$aChar->aaxpPoints><BR>";

echo '<br>';

echo "Armor Class (AC) : <INPUT type=range min=0 max=10000 name=pcAC size=5 value=$aChar->ac><BR>";
echo "Hit Points (HP) : <INPUT type=range min=0 max=10000 name=pcHP size=5 value=$aChar->hp><BR>";

echo '<br>';
echo 'Main char ? : <select name=pcIsMain>';

if ($aChar->isMain == 1)
{
	echo '         <option value="Oui" selected>Oui';
    echo '         <option value="Non">Non';
}
else
{
	echo '         <option value="Oui">Oui';
    echo '         <option value="Non" selected>Non';
}

echo '       </select><br>';

echo 'Avec epic ? : <select name=pcHasEpic>';
if ($aChar->hasEpic == 1)
{
    echo '         <option value="Non">Non';
	echo '         <option value="Oui" selected>Oui';
}
else
{
    echo '         <option value="Non" selected>Non';
	echo '         <option value="Oui">Oui';
}

echo '       </select><br>';

echo "Numéro de profil magelo : <INPUT type=range min=0 max=1000000 name=pcMagelo size=6 value=$aChar->magelo><BR>";
echo '<br>';

echo "Alchemy : <INPUT type=range min=0 max=250 name=pcAlchemy size=4 value=$aChar->tsAlchemy><BR>";
echo "Baking : <INPUT type=range min=0 max=250 name=pcBaking size=4 value=$aChar->tsBaking><BR>";
echo "Blacksmithing : <INPUT type=range min=0 max=250 name=pcBlacksmithing size=4 value=$aChar->tsBlacksmithing><BR>";
echo "Brewing : <INPUT type=range min=0 max=250 name=pcBrewing size=4 value=$aChar->tsBrewing><BR>";
echo "Fishing : <INPUT type=range min=0 max=250 name=pcFishing size=4 value=$aChar->tsFishing><BR>";
echo "Fletching : <INPUT type=range min=0 max=250 name=pcFletching size=4 value=$aChar->tsFletching><BR>";
echo "Jewellery : <INPUT type=range min=0 max=250 name=pcJewellery size=4 value=$aChar->tsJewellery><BR>";
echo "Pottery : <INPUT type=range min=0 max=250 name=pcPottery size=4 value=$aChar->tsPottery><BR>";
echo "Research : <INPUT type=range min=0 max=250 name=pcResearch size=4 value=$aChar->tsResearch><BR>";
echo "Tailoring : <INPUT type=range min=0 max=250 name=pcTailoring size=4 value=$aChar->tsTailoring><BR>";
echo "Tinkering : <INPUT type=range min=0 max=250 name=pcTinkering size=4 value=$aChar->tsTinkering><BR>";

echo '<BR>';
echo '<BR>';
echo '<INPUT type=submit value="Supprimer Définitivement ce personnage">';
echo '</b>';
echo '</div>';
echo '</font>';
echo '</span>';


echo '</body>';
echo '</html>';

include "footer.php3";
?>
