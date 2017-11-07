<?php
# 
# PHP Calendar 1.0
# Developed by Paul Burney, March 2001
# web: http://paul.burney.ws/
# email: paul@burney.ws
# 
# The most recent version of this script can be found on the burney web
# development site at:  http://webdevel.burney.ws/
#
# Configuration File.  Set the variables below to those used for your system.
#

// Basic Configuration

$header_file = './header.inc';
$footer_file = './footer.html';

$page_title = "Calendrier des barons";


// Color / Class for table cells
//#091147

$normal_day_cell  = ' bgcolor="#091137"';
$event_day_cell   = ' bgcolor="#401010"';
$invalid_day_cell = ' bgcolor="#091147"';
$current_day_cell = ' bgcolor="#104010"';
$header_cell      = ' bgcolor="#090127"';


// Database Connection Information

$db_host     = "";
$db_user     = "";
$db_password = "";
$db_database = "salvadom_db";
$db_table    = "baron_calendar";


// Days and Months Arrays (can adapt this to other languages)

$days = array(
"Dimanche",
"Lundi",
"Mardi",
"Mercredi",
"Jeudi",
"Vendredi",
"Samedi"
);

$months = array("",
"Janvier",
"Février",
"Mars",
"Avril",
"Mai",
"Juin",
"Juillet",
"Août",
"Septembre",
"Octobre",
"Novembre",
"Décembre"
);

?>
