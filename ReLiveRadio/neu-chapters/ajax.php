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
################################################################ Podcast Informations über Callback: callback
# 
#   Übergibt neue Liste nach Auslesen der ReLiveJson Api
#

// auf Callback-Parameter prüfen
if (isset($_GET["callback"]) && !empty($_GET["callback"])) {
  $callback = $_GET["callback"];


	// Header für ein JavaScript
  	header("Content-Type: application/javascript");


/** Chapter Marks Callback (nur für Shordcode in WordPress nutzen) **/
#$datei = file("http://testpreview.reliveradio.de/stream/technique.chapters");
#$datei = file("http://cm.wikibyte.org/testcodes/neu-chapters/podlove-web-player/relive.datei");
  
  	echo $callback. "('";

//Tests 
// so muss die Ausgabe für den Standalone Player aussehen
echo '<tr class="chaptertr active loaded" data-start="0.5" data-end="1.5" data-img="..."><td class="starttime"><span>00:01</span></td><td class="chaptername">Chapter Two</td><td class="timecode"><span>0:01</span></td></tr>';
echo '<tr class="chaptertr oddchapter loaded" data-start="0.5" data-end="1.5" data-img="..."><td class="starttime"><span>00:01</span></td><td class="chaptername">Chapter Two</td><td class="timecode"><span>0:01</span></td></tr>';
	
	//decode Json Schleife für weitere Beiträge- kommt später
	#foreach($datei AS $meine_datei){ echo $meine_datei; }

	echo "')";

}


################################################################ Podcast Informations über Callback infodown

// auf Callback-Parameter prüfen
if (isset($_GET["infodown"]) && !empty($_GET["infodown"])) {
  $infodown = $_GET["infodown"];


	// Header für ein JavaScript
  	header("Content-Type: application/javascript");



	echo $infodown. "('";
	//so muss die Ausgabe für die Podcastcover & Infos aussehen (#test 12 - modif.:3 im PWP.js file)
	echo '<div id="alles" class="podlovewebplayer_meta"><a class="bigplay" title="Play Episode" href="#"></a><div class="coverart"><img class="coverimg" src="http://static.reliveradio.de/logos/savoirvivre.jpg" data-img="http://static.reliveradio.de/logos/brainshares.jpg" alt=""></div><h3 class="episodetitle"><a href="...">LALAL</a></h3><div class="subtitle">...</div><div class="togglers"><a href="#" class="infowindow infobuttons pwp-icon-info-circle" title="More information about this"></a><a href="#" class="chaptertoggle infobuttons pwp-icon-list-bullet" title="Show/hide chapters"></a><a href="#" class="showdownloadbuttons infobuttons pwp-icon-download" title="Show/hide download bar"></a></div>';

	echo "')";
}
?>
