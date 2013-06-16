<?php
/**
*
*	TESTSYSTEM für Relive ausgabe über Ajax & JsonP
*
*	@Developer: Michael McCouman jr.
*	@Mail: Support@wikibyte.org
* 	@Version: 0.1.a
*
*/

// auf Callback-Parameter prüfen
if (isset($_GET["callback"]) && !empty($_GET["callback"])) {
  $callback = $_GET["callback"];

	// Setup URL Variable
	include('../inc/inc.setup.php');
	
	// Json Decoder für Relive Radio (auslesen)
	include('../inc/inc.json-decoder.php');
  
  
	// Rückmeldung zusammenbauen
	$nachricht_null = '<ul><li><span id="lititle"> '.$suche[0]["artist_name"]. '</span> - ' .$suche[0]["track_title"].'</li>';
  	$nachricht_eins = '<li><span id="lititle"> '.$suche[1]["artist_name"]. '</span> - ' .$suche[1]["track_title"].'</li>';
	$nachricht_zwei = '<li><span id="lititle"> '.$suche[2]["artist_name"]. '</span> - ' .$suche[2]["track_title"].'</li>';
	$nachricht_drei = '<li><span id="lititle"> '.$suche[3]["artist_name"]. '</span> - ' .$suche[3]["track_title"].'</li>';
	$nachricht_vier = '<li><span id="lititle"> '.$suche[4]["artist_name"]. '</span> - ' .$suche[4]["track_title"].'</li></ul>';
    $nachricht_ining = '<div id="ii"><span class="expandnew html">überprüft</span></div>';
	           
	// Header für ein JavaScript
  	header("Content-Type: application/javascript");


	// Rückmeldung senden
  	echo $callback ."('" .$nachricht_null. "" . $nachricht_eins . "" . $nachricht_zwei . "" . $nachricht_drei."" . $nachricht_vier."".$nachricht_ining. "')";
}

?>