<?php
/**
*
*	TESTSYSTEM für Relive ausgabe über Ajax & JsonP
*
*	@Developer: Michael McCouman jr.
*	@Mail: Support@wikibyte.org
* 	@Version: 0.1.2a
*
*/

	//ReRadio
	$jsonfile = file_get_contents('http://testpreview.reliveradio.de/stream/technique.json');

	//DeCode Json out:
	$suche = json_decode($jsonfile,TRUE);
	
global $suche;

######################################### Chapters Callback
if (isset($_GET["callback"]) && !empty($_GET["callback"])) {
  $callback = $_GET["callback"];

	//Header für ein JavaScript
  	header("Content-Type: application/javascript");

		/** Chapter Marks Callback **/
		#$datei = file("http://testpreview.reliveradio.de/stream/technique.chapters");
		#$datei = file("http://cm.wikibyte.org/testcodes/neu-chapters/podlove-web-player/relive.datei");
  
  	echo $callback. "('";
  	
			echo '<tr class="chaptertr active loaded" data-start="0.5" data-end="1.5" data-img="..."><td class="starttime"><span>00:01</span></td><td class="chaptername">'.$suche["live_episode"]["db"]["name"]. ' - '.$suche["live_episode"]["track_title"]. '</td><td class="timecode"><span>0:01</span></td></tr>';

		for($i = 0; $i < count($suche["upcoming_episodes"][0]); ++$i) {
   			echo '<tr class="chaptertr oddchapter loaded" data-start="0.5" data-end="1.5" data-img="..."><td class="starttime"><span>00:01</span></td><td class="chaptername">'.$suche["upcoming_episodes"][$i]["db"]["name"]. ' - '.$suche["upcoming_episodes"][$i]["track_title"]. '</td><td class="timecode"><span>0:01</span></td></tr>';
		}
	
	echo "')";
}








######################################### Cover Callback
// auf Callback-Parameter prüfen
if (isset($_GET["relivecoverdata"]) && !empty($_GET["relivecoverdata"])) {
  $relivecoverdata = $_GET["relivecoverdata"];

	//Header für ein JavaScript
  	header("Content-Type: application/javascript");

	echo $relivecoverdata. "('";
		echo '<img class="coverimg" src="http://static.reliveradio.de/logos/'.$suche["live_episode"]["db"]["slugintern"]. '.jpg" data-img="http://static.reliveradio.de/logos/'.$suche["live_episode"]["db"]["slugintern"]. '.jpg" alt="">';
	echo "')";
}


######################################### Title Callback
// auf Callback-Parameter prüfen
if (isset($_GET["relivetitlenamedata"]) && !empty($_GET["relivetitlenamedata"])) {
  $relivetitlenamedata = $_GET["relivetitlenamedata"];

	//Header für ein JavaScript
  	header("Content-Type: application/javascript");

	echo $relivetitlenamedata. "('";
		echo '<b style="font-weight: bold; font-size: 13px;">Gerade läuft: </b>'.$suche["live_episode"]["db"]["name"];
	echo "')";
}

######################################### Descs Callback
// auf Callback-Parameter prüfen
if (isset($_GET["relivedescdata"]) && !empty($_GET["relivedescdata"])) {
  $relivedescdata = $_GET["relivedescdata"];

	//Header für ein JavaScript
  	header("Content-Type: application/javascript");

	echo $relivedescdata. "('";
		echo '<p id="pinfos">'.$suche["live_episode"]["db"]["description"]. '</p>';
	echo "')";
}
?>