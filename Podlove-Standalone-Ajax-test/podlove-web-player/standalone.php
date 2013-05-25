<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Demo</title>

	<link href="static/podlove-web-player.css" rel="stylesheet" media="screen" type="text/css" />

	<script src="libs/html5shiv.js"></script>
	<script src="libs/jquery-1.9.1.min.js"></script>
	<script src="static/podlove-web-player.js"></script>
	
	
	<script src="http://cm.wikibyte.org/testcodes/neu-chapters/ajax.js"></script>
<style>
.podlovewebplayer_chapterbox.showonplay.active {
	height: auto!important;
}
p#pinfos {
	font-size: 13px;
}
p#pinfos a{
	font-size: 13px;
	color:#fff; 
	text-decoration: underline !important;
}
p#pinfos b{
	font-size: 13px;
	font-weight: bold;
}
</style>


</head>

<body>





	<p>
		<audio id="testplayer">
			<source src="http://stream.reliveradio.de:8000/24mobile.mp3" type="audio/mpeg"></source>
		</audio>
<?php
	//ReRadio
	$jsonfile = file_get_contents('http://testpreview.reliveradio.de/stream/technique.json');

	//DeCode Json out:
	$suche = json_decode($jsonfile,TRUE);

		echo "<script>";
			
		echo "$('#testplayer').podlovewebplayer({ \n";
		echo "			poster: 'samples/reliveradio.png', \n";
		echo "			title: 'ReLive Radio', \n";
		echo "			permalink: '...', \n";
		echo "			subtitle: 'Dein Podcast Radio', \n";
 		echo "			chapters: [ \n";
 		echo "					{'start':'00:00:00.000','title':'". $suche["live_episode"]["db"]["name"]. " - ". $suche["live_episode"]["track_title"] ."', 'image':'http://static.reliveradio.de/logos/". $suche["live_episode"]["db"]["slugintern"]. ".jpg'} \n";
		
		for($i = 0; $i < count($suche["upcoming_episodes"][0]); ++$i) { 
			echo "					,{'start':'00:00:00.000','title':'". $suche["upcoming_episodes"][$i]["db"]["name"] ." - ". $suche["upcoming_episodes"][$i]["track_title"]. "', 'image':''} \n"; 
		} 
		echo "					], \n";					


		?>
		summary: '<p id="pinfos">Das <a href="http://reliveradio.de">ReliveRadio</a> sendet rund um die Uhr Podcastformate aus ganz verschiedenen Themenbereichen. <br><br><b>Motivation</b><br><br>Zum einen, möchten wir mit dem ReliveRadio Menschen erreichen, die sich erst wenig oder gar nicht mit dem Format Podcast beschäftigt haben und so eine niederschwellige Einstiegsmöglichkeit bieten. Zum anderen soll das ReliveRadio aber auch Hörern die Gelegenheit geben, neue Podcastformate kennen zu lernen. Ansonsten möchten wir dazu beitragen, dass Podcasts auch mit geringer Bandbreite jederzeit auf dem Smartphone, dem Smart-TV, im Auto oder auf anderen Geräten gehört werden können.</p>',
		duration: '24:00:00',
		alwaysShowHours: true,
		startVolume: 0.8,
		width: 'auto',
		summaryVisible: false,
		chaptersVisible: true
	});
</script>
	</p>
</body>
</html>