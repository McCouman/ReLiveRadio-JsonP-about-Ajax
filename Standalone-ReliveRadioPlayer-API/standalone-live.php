<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>ReLive Radio - Live Player</title>
	<link href="./podlove-web-player/static/podlove-web-player.css" rel="stylesheet" media="screen" type="text/css" />
	<script src="./podlove-web-player/libs/html5shiv.js"></script>
	<script src="./podlove-web-player/libs/jquery-1.9.1.min.js"></script>
	<script src="./podlove-web-player/static/podlove-web-player.js"></script>
<?php

################################################ ReLive - Color API ################################################ 
/**
*	ReLive - Color API
*	@developer by Michael McCouman jr.
* 	@date 4 Juni 2013
*	@version 2.0.a
*/

# Abfrage ob CSS ?
if (isset($_GET["css"]) && !empty($_GET["css"])) {
	
	//Variable übergabe CSS Name
	$css = $_GET["css"];
		
		//Vergleich
		if ($css == 'mix'){ $mix_color = $_GET["css"]; } //mix
		elseif ($css == 'technik'){ $technik_color = $_GET["css"]; } //technik
		elseif ($css == 'kultur'){ $kultur_color = $_GET["css"]; } //kultur
			//Error
			else {	echo '<!-- Error CSS API!-->'; }

		//Ausgabe ReLive css: 
		echo '<link href="http://cm.wikibyte.org/testcodes/neu-chapters/css/'.$mix_color .''. $technik_color .''. $kultur_color.'.css" rel="stylesheet" media="screen" type="text/css" />';

} else {

		//Easy Color Player 
		if (isset($_GET["color"]) && !empty($_GET["color"])) {
  			$color = $_GET["color"];
		?><style>	.podlovewebplayer_wrapper{color:#ffffff !important;}.podlovewebplayer_wrapper .podlovewebplayer_meta,.podlovewebplayer_wrapper .podlovewebplayer_meta .subtitle,.podlovewebplayer_wrapper .podlovewebplayer_meta h3,.podlovewebplayer_wrapper .podlovewebplayer_meta h3 a,.podlovewebplayer_meta + .summary,.podlovewebplayer_wrapper .podlovewebplayer_controlbox,.podlovewebplayer_wrapper .podlovewebplayer_meta .togglers{color:#ffffff !important;}.podlovewebplayer_wrapper .podlovewebplayer_top,.podlovewebplayer_wrapper .podlovewebplayer_meta{background:#<?php echo $color; ?>;background:-moz-linear-gradient(top,#<?php echo $color; ?> 0%,#<?php echo $color; ?> 100%);background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#<?php echo $color; ?>),color-stop(100%,#<?php echo $color; ?>));background:-webkit-linear-gradient(top,#<?php echo $color; ?> 0%,#<?php echo $color; ?> 100%);background:-o-linear-gradient(top,#<?php echo $color; ?> 0%,#<?php echo $color; ?> 100%);background:-ms-linear-gradient(top,#<?php echo $color; ?> 0%,#<?php echo $color; ?> 100%);background:linear-gradient(to bottom,#<?php echo $color; ?> 0%,#<?php echo $color; ?> 100%);filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#<?php echo $color; ?>',endColorstr='#<?php echo $color; ?>',GradientType=0 );}.podlovewebplayer_meta .bigplay{color:#ffffff;border-color:#ffffff !important;}.podlovewebplayer_meta .bigplay:hover,.podlovewebplayer_meta .bigplay:active,.podlovewebplayer_meta .bigplay.playing:hover,.podlovewebplayer_meta .bigplay.playing:active{color:#ffffff !important;border-color:#ffffff !important;text-shadow:0px 0px 4px #ffffff;text-decoration:none;filter:dropshadow(color=#ffffff,offx=0,offy=0);cursor:pointer;}.podlovewebplayer_meta .togglers .infobuttons,.podlovewebplayer_meta .togglers .infobuttons a,.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons,.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons a{color:#ffffff;text-shadow:0px 0px 1px #ffffff;text-decoration:none;}.podlovewebplayer_meta .togglers .infobuttons:hover,.podlovewebplayer_meta .togglers .infobuttons a:hover,.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons:hover,.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons a:hover{text-shadow:0px 0px 4px #ffffff;text-decoration:none;filter:dropshadow(color=#ffffff,offx=0,offy=0);cursor:pointer;}.podlovewebplayer_meta + .summary,.podlovewebplayer_wrapper .podlovewebplayer_controlbox{background:#<?php echo $color; ?> !important;border-left:3px #<?php echo $color; ?> solid !important;border-right:3px #<?php echo $color; ?> solid !important;}.podlovewebplayer_wrapper .podlovewebplayer_controlbox{background:#<?php echo $color; ?> !important;border-left:3px #<?php echo $color; ?> solid !important;border-right:3px #<?php echo $color; ?> solid !important;}.mejs-controls .mejs-play button{background-position:0 0;}.mejs-controls .mejs-pause button{background-position:0 -16px;}.mejs-controls .mejs-stop button{background-position:-112px 0;}.mejs-controls .mejs-fullscreen-button button{background-position:-32px 0;}.mejs-controls .mejs-unfullscreen button{background-position:-32px -16px;}.mejs-controls .mejs-mute button{background-position:-16px -16px;}.mejs-controls .mejs-unmute button{background-position:-16px 0;}.mejs-controls .mejs-captions-button button{background-position:-48px 0;}.mejs-controls .mejs-loop-off button{background-position:-64px -16px;}.mejs-controls .mejs-loop-on button{background-position:-64px 0;}.mejs-controls .mejs-backlight-off button{background-position:-80px -16px;}.mejs-controls .mejs-backlight-on button{background-position:-80px 0;}.mejs-controls .mejs-sourcechooser-button button{background-position:-128px 0;}.podlovewebplayer_wrapper .mejs-container .mejs-inner .mejs-controls{background:#<?php echo $color; ?> !important;background:-moz-linear-gradient(top,#<?php echo $color; ?> 0%,#<?php echo $color; ?> 100%) !important;background:-webkit-gradient(linear,left top,left bottom,color-stop(0%,#<?php echo $color; ?>),color-stop(100%,#<?php echo $color; ?>)) !important;background:-webkit-linear-gradient(top,#<?php echo $color; ?> 0%,#<?php echo $color; ?> 100%) !important;background:-o-linear-gradient(top,#<?php echo $color; ?> 0%,#<?php echo $color; ?> 100%) !important;background:-ms-linear-gradient(top,#<?php echo $color; ?> 0%,#<?php echo $color; ?> 100%) !important;background:linear-gradient(to bottom,#<?php echo $color; ?> 0%,#<?php echo $color; ?> 100%) !important;filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#<?php echo $color; ?>',endColorstr='#<?php echo $color; ?>',GradientType=0 ) !important;}.mejs-container .mejs-controls .mejs-time span{color:#111;}.podlovewebplayer_wrapper .podlovewebplayer_chapterbox{border:3px #<?php echo $color; ?> solid !important;border-bottom:0px #<?php echo $color; ?> solid !important;}.podlovewebplayer_wrapper .podlovewebplayer_tableend{background:#<?php echo $color; ?> !important;-webkit-box-shadow:0px 1px #<?php echo $color; ?>;-moz-box-shadow:0px 1px #<?php echo $color; ?>;box-shadow:0px 1px #<?php echo $color; ?>;}.podlovewebplayer_meta .bigplay, .podlovewebplayer_meta .togglers .infobuttons, .podlovewebplayer_meta .togglers .infobuttons a, .podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons, .podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons a {color:#ffffff !important;}.podlovewebplayer_wrapper .podlovewebplayer_meta .bigplay {border: 5px solid #ffffff !important;}.mejs-container .mejs-controls .mejs-time span{color:#<?php echo $color; ?> !important} </style><?php		
		
		//Error
		} else { echo '<!--Standard Player - No API!-->'; }
	
	//Keine Eingaben
	echo '<!--Color Player Black-->';
}

################################################ Relive - WebPlayer ################################################

/**
*	ReLive - WebPlayer
*	@developer by Michael McCouman jr.
* 	@date 4 Juni 2013
*	@version 2.0.a
*/
	//StreamUrl:
	$uristream = "http://stream.reliveradio.de:8000/24mobile.mp3";

##### Relive Ajax #########

	//für späteres including und URL
	echo '<script src="http://cm.wikibyte.org/testcodes/neu-chapters/ajax.js.php"></script>'; 

##### Relive Json #########

	//ReRadio
	$jsonfile = file_get_contents('http://testpreview.reliveradio.de/stream/technique.json');

	//DeCode Json out:
	$suche = json_decode($jsonfile,TRUE);

##### Angaben - Zeit #########
	
	//Serverzeit
	$timestamp = time();
	$uhrzeit = date("H:i:s",$timestamp);
	
		//Rechner Server: Addierung der Stunden + 02:00:00
		$first 		= 	explode(":",$uhrzeit);
		$second 	= 	explode(":","02:00:50");
		$rechner 	= 	mktime(	$first[0] + $second[0], 
						$first[1] + $second[1], 
						$first[2] + $second[2] );
		
##### Abgleich - Zeit #########	
	
	//Server Time:
	$server = date("H:i:s", $rechner);

	//Serverzeit:
	$agleich = strtotime($server);
?>
</head>
<body>
<p>
<?php

############################################# //Start - Audio #############################################
echo '<audio id="testplayer">';
  echo '<source src="'.$uristream.'" type="audio/mpeg"></source>';
echo '</audio>';
############################################# //Ende - Audio ##############################################

####################################### //Start - Podlove Web Player ######################################
echo "<script>\n";			
echo "$('#testplayer').podlovewebplayer({ \n";
echo "poster: 'http://static.reliveradio.de/logos/". $suche["live_episode"]["db"]["slugintern"]. ".jpg', \n";
echo "title: 'ReLive Radio', \n";
echo "permalink: 'http://reliveradio.de', \n";
echo "subtitle: 'Dein Podcast Radio', \n";

//startepisode (läuft gerade)
echo "chapters: [ \n";
  echo " {'start':'00:00:00.000','title':'". $suche["live_episode"]["db"]["name"]. " - ". $suche["live_episode"]["track_title"] ."', 'image':'http://static.reliveradio.de/logos/". $suche["live_episode"]["db"]["slugintern"]. ".jpg'} \n";

//weitere Episoden
for($i = 0; $i < count($suche["upcoming_episodes"]); ++$i) { 
  echo ",{'start':'". date("H:i:s", (strtotime(substr($suche["upcoming_episodes"][$i]["starts"], 11,-6))-strtotime($server))) ."','title':'". preg_replace("/(')+/","&rsquo;",$suche["upcoming_episodes"][$i]["db"]["name"]) ." - ". preg_replace("/(')+/","&rsquo;",$suche["upcoming_episodes"][$i]["track_title"]). "', 'image':'http://static.reliveradio.de/logos/".$suche["upcoming_episodes"][$i]["db"]["slugintern"]. ".jpg'} \n"; 
} 

echo "], \n";					
echo "summary: '<p id=\"pinfos\">Das <a href=\"http://reliveradio.de\">ReliveRadio</a> sendet rund um die Uhr Podcastformate aus ganz verschiedenen Themenbereichen. <br><br><b>Motivation</b><br><br>Zum einen, möchten wir mit dem ReliveRadio Menschen erreichen, die sich erst wenig oder gar nicht mit dem Format Podcast beschäftigt haben und so eine niederschwellige Einstiegsmöglichkeit bieten. Zum anderen soll das ReliveRadio aber auch Hörern die Gelegenheit geben, neue Podcastformate kennen zu lernen. Ansonsten möchten wir dazu beitragen, dass Podcasts auch mit geringer Bandbreite jederzeit auf dem Smartphone, dem Smart-TV, im Auto oder auf anderen Geräten gehört werden können.</p>', \n";
echo "duration: '24:00:00',  \n";
echo "alwaysShowHours: true, \n";
echo "startVolume: 0.8, \n";
echo "width: 'auto', \n";
echo "summaryVisible: false, \n";
echo "chaptersVisible: true \n";
echo "}); \n";
echo "</script>\n";
####################################### //End - Podlove Web Player #######################################

?>
</p>
</body>
</html>