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


	// Header für ein JavaScript
  	header("Content-Type: application/javascript");





/** Chapter Marks Callback **/
#$datei = file("http://testpreview.reliveradio.de/stream/technique.chapters");
#$datei = file("http://cm.wikibyte.org/testcodes/neu-chapters/podlove-web-player/relive.datei");
  
  	echo $callback. "('";

echo '<tr class="chaptertr active loaded" data-start="0.5" data-end="1.5" data-img="..."><td class="starttime"><span>00:01</span></td><td class="chaptername">Chapter Two</td><td class="timecode"><span>0:01</span></td></tr>';
echo '<tr class="chaptertr oddchapter loaded" data-start="0.5" data-end="1.5" data-img="..."><td class="starttime"><span>00:01</span></td><td class="chaptername">Chapter Two</td><td class="timecode"><span>0:01</span></td></tr>';

	#foreach($datei AS $meine_datei){ echo $meine_datei; }

	echo "')";

}












// auf Callback-Parameter prüfen
if (isset($_GET["infodown"]) && !empty($_GET["infodown"])) {
  $infodown = $_GET["infodown"];


	// Header für ein JavaScript
  	header("Content-Type: application/javascript");



echo $infodown. "('";

echo '<div id="alles" class="podlovewebplayer_meta"><a class="bigplay" title="Play Episode" href="#"></a><div class="coverart"><img class="coverimg" src="http://static.reliveradio.de/logos/savoirvivre.jpg" data-img="http://static.reliveradio.de/logos/brainshares.jpg" alt=""></div><h3 class="episodetitle"><a href="...">LALAL</a></h3><div class="subtitle">...</div><div class="togglers"><a href="#" class="infowindow infobuttons pwp-icon-info-circle" title="More information about this"></a><a href="#" class="chaptertoggle infobuttons pwp-icon-list-bullet" title="Show/hide chapters"></a><a href="#" class="showdownloadbuttons infobuttons pwp-icon-download" title="Show/hide download bar"></a></div>';

echo "')";
}
?>