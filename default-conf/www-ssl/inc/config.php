<?PHP
// Adresse des Webservers
$url = "https://engelsystem.url/";

// Startverzeichnis des Engelhome
$ENGEL_ROOT = "/engel/";

// System disable message, ist ist set is: bages schow only this text
//$SystemDisableMessage="<H1>This system ist moved to a server in the BCC, you can in the moment only youse it in the in Engel Room</H1>";

// Anzahl der News, die auf einer Seite ausgeben werden koennen...
$DISPLAY_NEWS = 6;

// Anzahl Stunden bis zum Austragen eigener Schichten
$LETZTES_AUSTRAGEN=3;

//Setzt den zu verwendenden Crypto algorismis 
// mp5 oder crypt
// achtung crypt schaltet password �ndern ab
$crypt_system="md5";
//$crypt_system="crypt";


// f�r Developen 1, sonst = 0
$DEBUG = 0;

// SSL Cert-KEY
$show_SSLCERT = "MD5:<br>FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF<br>\n".
		"SHA1:<br>FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF:FF";

//globale const. fuer schischtplan
$GlobalZeileProStunde = 4;

//ist ein modem angeschlossen
$ModemEnable = false;

//Tempdir
$Tempdir="/tmp";

//Pentabarf ConferenzDI f�r UpdateDB
$PentabarXCALurl="https://pentabarf.cccv.de/xcal/conference/<ConfereneceID>";

?>