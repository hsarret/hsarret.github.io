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
      <div align="left"><font color="#FFFFFF" size="3"><b><span class="Tahoma14">Création de personnage</span></b></font> </div>
    </td>
    <td background="title_right.jpg" width="28">
      <div align="left"><font size="1"><font size="2"><font size="3"></font></font></font></div>
    </td>
  </tr>
</table>

<span class="Tahoma14"><font color="#FFFFFF"><div align=left>
<b>
<FORM Method="GET" Action="addchar.php3">
Nom du personnage : <INPUT type=text size=32 name=pcName><BR><br>

Race : <select name=pcRace>
         <option value="Barbarian" selected>Barbarian
         <option value="Dark elf">Dark elf
         <option value="Dwarf">Dwarf
         <option value="Erudite">Erudite
         <option value="Gnome">Gnome
         <option value="Half-elf">Half-elf
         <option value="Halfling">Halfling
         <option value="High-Elf">High-Elf
         <option value="Human">Human
         <option value="Iksar">Iksar
         <option value="Ogre">Ogre
         <option value="Troll">Troll
         <option value="Vah Shir">Vah Shir
         <option value="Wood Elf">Wood Elf
       </select><br>


Classe : <select name=pcClass>
         <option value="Bard" selected>Bard
         <option value="Beastloard">Beastloard
         <option value="Cleric">Cleric
         <option value="Druid">Druid
         <option value="Enchanter">Enchanter
         <option value="Magician">Magician
         <option value="Monk">Monk
         <option value="Necromancer">Necromancer
         <option value="Paladin">Paladin
         <option value="Ranger">Ranger
         <option value="Rogue">Rogue
         <option value="Shadowknight">Shadowknight
         <option value="Shaman">Shaman
         <option value="Warrior">Warrior
         <option value="Wizard">Wizard
       </select><br>


Déité : <select name=pcDeity>
         <option value="Agnostic" selected>Agnostic
         <option value="Bertoxxulus">Bertoxxulus
         <option value="Brell Serilis">Brell Serilis
         <option value="Bristlebane">Bristlebane
         <option value="Cazic Thule">Cazic Thule
         <option value="Erollisi Marr">Erollisi Marr
         <option value="Innoruuk">Innoruuk
         <option value="Karana">Karana
         <option value="Mithaniel Marr">Mithaniel Marr
         <option value="Prexus">Prexus
         <option value="Quellious">Quellious
         <option value="Rallos Zek">Rallos Zek
         <option value="Rodcet Nife">Rodcet Nife
         <option value="Solusek Ro">Solusek Ro
         <option value="The Tribunal">The Tribunal
         <option value="Tunare">Tunare
         <option value="Veeshan">Veeshan
       </select><br>
<br>


Level : <INPUT type=range min=1 max=60 name=pcLevel size=4 value=1><BR>
Points d'AA EXP : <INPUT type=range min=0 max=1000 name=pcAAEXP size=4 value=0><BR>
<br>
Armor Class (AC) : <INPUT type=range min=0 max=10000 name=pcAC size=5 value=0><BR>
Hit Points (HP) : <INPUT type=range min=0 max=10000 name=pcHP size=5 value=0><BR>

<br>
Main char ? : <select name=pcIsMain>
         <option value="Oui" selected>Oui
         <option value="Non">Non
       </select><br>


Avec epic ? : <select name=pcHasEpic>
         <option value="Non" selected>Non
         <option value="Oui">Oui
       </select><br>

Numéro de profil magelo : <INPUT type="range" min=0 max=1000000 name=pcMagelo size=6 value=0><BR>
<br>

Alchemy : <INPUT type="range" min=0 max=250 name=pcAlchemy size=4 value=0><BR>
Baking : <INPUT type="range" min=0 max=250 name=pcBaking size=4 value=0><BR>
Blacksmithing : <INPUT type="range" min=0 max=250 name=pcBlacksmithing size=4 value=0><BR>
Brewing : <INPUT type="range" min=0 max=250 name=pcBrewing size=4 value=0><BR>
Fishing : <INPUT type="range" min=0 max=250 name=pcFishing size=4 value=0><BR>
Fletching : <INPUT type="range" min=0 max=250 name=pcFletching size=4 value=0><BR>
Jewellery : <INPUT type="range" min=0 max=250 name=pcJewellery size=4 value=0><BR>
Pottery : <INPUT type="range" min=0 max=250 name=pcPottery size=4 value=0><BR>
Research : <INPUT type="range" min=0 max=250 name=pcResearch size=4 value=0><BR>
Tailoring : <INPUT type="range" min=0 max=250 name=pcTailoring size=4 value=0><BR>
Tinkering : <INPUT type="range" min=0 max=250 name=pcTinkering size=4 value=0><BR>

<BR>
<BR>
<INPUT type=submit value="Créer le personnage">
</b>
</div>
</font>
</span>


</body>
</html>


<?
  include "footer.php3";
?>
