<?php 
global $info;
$info = '
Du findest die automatisch aus dem Json generierte Chapter.txt unter:
<br>

<br>
<a href="http://cm.wikibyte.org/testcodes/chapters.txt">http://cm.wikibyte.org/testcodes/chapters.txt</a>
<br>

<br>
Alternative kannst du auch die API URL eintragen. Diese lautet:<br><br>
<a href="http://cm.wikibyte.org/testcodes/index?api=chapters">http://cm.wikibyte.org/testcodes/index?api=chapters</a>
<br>

<br>
<b>Integration:</b>
<br>
Bitte gebe diesen Link in deinem Podlove Web Player unter <span style="color:#f00;">chapters=""</span> ein.
<br>

<br>
<b>Beispielcode:</b>
<div style="border-radius:2px; background:#eee; padding:10px; border: 1px solid #aaa;">
[podloveaudio src="http://stream.reliveradio.de:8000/24.mp3" <span style="color:#f00;">chapters="http://cm.wikibyte.org/testcodes/chapters.txt"</span>]
</div>'; 

############# INPUT SESSION: #########################################################
#

if($_GET['api']) {
<<<<<<< HEAD
		
	//get in var:
	$url = $_GET['api'];
		
		//is $url = $url =>
		if($url == 'chapters') {
				
		
	#############################################################
	# API URL (index.php?url=<Name der URL>)
	#
			
	#echo $rows;
=======
				
		//get in var:
		$url = $_GET['api'];
		$url = $url; //no *.txt!
				
		//Abfrage:
		$count = $url; //test2
			
	

		if($count == 'chapters') {
				
		
#############################################################
# API URL (index.php?api=chapters)
#
	//Test gets		
	#echo $url;
>>>>>>> 0f92c8dac451cb18630b6342e6b78044dcdc2975
		
	//ReRadio
	$jsonfile = file_get_contents('http://programm.reliveradio.de/api/today-info');

	//DeCode Json out:
	$suche = json_decode($jsonfile,TRUE);
	

//--------------

//0
if (time() < strtotime(substr($suche[0]["ends"], 0, 19))) {	
	echo substr($suche[0]["starts"], 11) . " " .$suche[0]["artist_name"]. ": " .$suche[0]["track_title"]. "\n";
} #else { echo '23 - no'; }

//1
if (time() < strtotime(substr($suche[1]["ends"], 0, 19))) {	
	echo substr($suche[1]["starts"], 11) . " " .$suche[1]["artist_name"]. ": " .$suche[1]["track_title"]. "\n";
} #else { echo '23 - no'; }

//2
if (time() < strtotime(substr($suche[2]["ends"], 0, 19))) {	
	echo substr($suche[2]["starts"], 11) . " " .$suche[2]["artist_name"]. ": " .$suche[2]["track_title"]. "\n";
} #else { echo '23 - no'; }

//3
if (time() < strtotime(substr($suche[3]["ends"], 0, 19))) {	
	echo substr($suche[3]["starts"], 11) . " " .$suche[3]["artist_name"]. ": " .$suche[3]["track_title"]. "\n";
} #else { echo '23 - no'; }

//4
if (time() < strtotime(substr($suche[4]["ends"], 0, 19))) {	
	echo substr($suche[4]["starts"], 11) . " " .$suche[4]["artist_name"]. ": " .$suche[4]["track_title"]. "\n";
} #else { echo '23 - no'; }

//5
if (time() < strtotime(substr($suche[5]["ends"], 0, 19))) {	
	echo substr($suche[5]["starts"], 11) . " " .$suche[5]["artist_name"]. ": " .$suche[5]["track_title"]. "\n";
} #else { echo '23 - no'; }

//6
if (time() < strtotime(substr($suche[6]["ends"], 0, 19))) {	
	echo substr($suche[6]["starts"], 11) . " " .$suche[6]["artist_name"]. ": " .$suche[6]["track_title"]. "\n";
} #else { echo '23 - no'; }

//7
if (time() < strtotime(substr($suche[7]["ends"], 0, 19))) {	
	echo substr($suche[7]["starts"], 11) . " " .$suche[7]["artist_name"]. ": " .$suche[7]["track_title"]. "\n";
} #else { echo '23 - no'; }

//8
if (time() < strtotime(substr($suche[8]["ends"], 0, 19))) {	
	echo substr($suche[8]["starts"], 11) . " " .$suche[8]["artist_name"]. ": " .$suche[8]["track_title"]. "\n";
} #else { echo '23 - no'; }

//9
if (time() < strtotime(substr($suche[9]["ends"], 0, 19))) {	
	echo substr($suche[9]["starts"], 11) . " " .$suche[9]["artist_name"]. ": " .$suche[9]["track_title"]. "\n";
} #else { echo '23 - no'; }

//10
if (time() < strtotime(substr($suche[10]["ends"], 0, 19))) {	
	echo substr($suche[10]["starts"], 11) . " " .$suche[10]["artist_name"]. ": " .$suche[10]["track_title"]. "\n";
} #else { echo '23 - no'; }

//11
if (time() < strtotime(substr($suche[11]["ends"], 0, 19))) {	
	echo substr($suche[11]["starts"], 11) . " " .$suche[11]["artist_name"]. ": " .$suche[11]["track_title"]. "\n";
} #else { echo '23 - no'; }

//12
if (time() < strtotime(substr($suche[12]["ends"], 0, 19))) {	
	echo substr($suche[12]["starts"], 11) . " " .$suche[12]["artist_name"]. ": " .$suche[12]["track_title"]. "\n";
} #else { echo '23 - no'; }

//13
if (time() < strtotime(substr($suche[13]["ends"], 0, 19))) {	
	echo substr($suche[13]["starts"], 11) . " " .$suche[13]["artist_name"]. ": " .$suche[13]["track_title"]. "\n";
} #else { echo '23 - no'; }

//14
if (time() < strtotime(substr($suche[14]["ends"], 0, 19))) {	
	echo substr($suche[14]["starts"], 11) . " " .$suche[14]["artist_name"]. ": " .$suche[14]["track_title"]. "\n";
} #else { echo '23 - no'; }

//15
if (time() < strtotime(substr($suche[15]["ends"], 0, 19))) {	
	echo substr($suche[15]["starts"], 11) . " " .$suche[15]["artist_name"]. ": " .$suche[15]["track_title"]. "\n";
} #else { echo '23 - no'; }

//16
if (time() < strtotime(substr($suche[16]["ends"], 0, 19))) {	
	echo substr($suche[16]["starts"], 11) . " " .$suche[16]["artist_name"]. ": " .$suche[16]["track_title"]. "\n";
} #else { echo '23 - no'; }

//17
if (time() < strtotime(substr($suche[17]["ends"], 0, 19))) {	
	echo substr($suche[17]["starts"], 11) . " " .$suche[17]["artist_name"]. ": " .$suche[17]["track_title"]. "\n";
} #else { echo '23 - no'; }

//18
if (time() < strtotime(substr($suche[18]["ends"], 0, 19))) {	
	echo substr($suche[18]["starts"], 11) . " " .$suche[18]["artist_name"]. ": " .$suche[18]["track_title"]. "\n";
} #else { echo '23 - no'; }

//19
if (time() < strtotime(substr($suche[19]["ends"], 0, 19))) {	
	echo substr($suche[19]["starts"], 11) . " " .$suche[19]["artist_name"]. ": " .$suche[19]["track_title"]. "\n";
} #else { echo '23 - no'; }

//20
if (time() < strtotime(substr($suche[20]["ends"], 0, 19))) {	
	echo substr($suche[20]["starts"], 11) . " " .$suche[20]["artist_name"]. ": " .$suche[20]["track_title"]. "\n";
} #else { echo '23 - no'; }

//21
if (time() < strtotime(substr($suche[21]["ends"], 0, 19))) {	
	echo substr($suche[21]["starts"], 11) . " " .$suche[21]["artist_name"]. ": " .$suche[21]["track_title"]. "\n";
} #else { echo '23 - no'; }


//22
if (time() < strtotime(substr($suche[22]["ends"], 0, 19))) {	
	echo substr($suche[22]["starts"], 11) . " " .$suche[22]["artist_name"]. ": " .$suche[22]["track_title"]. "\n";
} #else { echo '23 - no'; }

//23
if (time() < strtotime(substr($suche[23]["starts"], 0, 19))) {	
	echo substr($suche[23]["starts"], 11) . " " .$suche[23]["artist_name"]. ": " .$suche[23]["track_title"]. "\n";
} #else { echo '23 - no'; }
	
		
//--------------//		
		
	} else {
		echo '<h1>Falsche API Anweiung!</h1>';
		echo $info;
	}
	#
	#
	###################################################################
					
				
<<<<<<< HEAD
// ERRORMELDUNG: 
} else { 
	echo '<h1>ReLive Chapter API</h1>';
	echo $info. '<br>@Developer: Michael Kaufmann 2013';
}
?>
=======
		# ERRORMELDUNG: 
		} else { 
			echo '<h1>ReLive Chapter API</h1>';
			echo $info. '<br>@Developer: Michael Kaufmann 2013';
		} 

		#
		#
		###################################################################
		
	


?>
>>>>>>> 0f92c8dac451cb18630b6342e6b78044dcdc2975
