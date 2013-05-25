<?php

	//ReRadio Json:
	$jsonfile = file_get_contents('http://testpreview.reliveradio.de/stream/technique.json');

	//DeCode Json Out:
	$suche = json_decode($jsonfile,TRUE);
	


	##### Angaben - Zeit #########
	//Serverzeit
	$timestamp = time();
	$uhrzeit = date("H:i:s",$timestamp);
	
		//Rechner Server: Addierung der Stunden + 02:00:00
		$first 		= 	explode(":",$uhrzeit);
		$second 	= 	explode(":","02:00:00");
		$rechner 	= 	mktime(	$first[0] + $second[0], 
								$first[1] + $second[1], 
								$first[2] + $second[2] );
		
	##### Abgleich - Zeit #########
	//ReLive Time (gerade läuft:)
	$retime = substr($suche["live_episode"]["ends"], 11,-6);
		
	//Server Time:
	$server = date("H:i:s", $rechner);
			
		//Test: Serverzeit+2Stunden:
		#echo 'Livetime:'. $server.'<br><br>';

		//Testausgaben A & B
		#echo 'O.A:'. $server. '<br>'; 
		#echo 'O.B:'. $retime. '<br>';
	
	# Wandler
	//Serverzeit, ReliveZeit:
	$agleich = strtotime($server);
	$bgleich = strtotime($retime);
	
	//Berechne lasttime bis new episode
	$resttime = ($bgleich-$agleich);
		
		//Testausgaben Stringtimes
		echo 'A:'. $agleich. '<br>'; 
		echo 'B:'. $bgleich. '<br>'; 
		//Ausgebe String - Restzeit:
		echo 'X:'. $resttime. '<br><br>'; 


		//Testausgaben A & B + Restzeit:
		echo 'A.ser: '. $server. '<br>'; 
		echo 'B.rel: '. $retime. '<br>';
		echo 'R.est: '. date("H:i:s", $resttime). '<br>'; 

		//Funktion in Sekunden:
		function onlineTime($time) {
    		$time=explode(':',$time);
    		$sec = $time[0]*3600;
    		$sec+=$time[1]*60;
    		$sec+=$time[2];
    			return $sec;
		}
		$aaa = onlineTime($resttime);

		echo 'R.sek:'. $aaa. '<br>'; 


/*
//Ausgabe real:
echo 'A Time jetzt: <br>';
echo 'B Time ohne:'. strtotime(substr($suche["live_episode"]["starts"], 0, 11)). '<br>';
echo 'Time original:'. $suche["live_episode"]["starts"]. '<br>';
echo 'Time subst ohne:'. substr($suche["live_episode"]["starts"], 11). '<br>';
*/


/*
//Testschleife:
if (time() < strtotime(substr($suche["live_episode"]["starts"], 0, 19))) {	

	echo $suche["live_episode"]["starts"];

} else { 
	echo 'nix da'; 
}
*/



/*
*	Neuste Episode:
*
echo 'Name:  '.$suche["live_episode"]["db"]["name"]. '<br>';
echo 'Folge: '.$suche["live_episode"]["track_title"]. '<br>';
echo 'Desc:  '.$suche["live_episode"]["db"]["description"]. '<br>';
echo 'Img:  <img src="http://static.reliveradio.de/logos/'.$suche["live_episode"]["db"]["slugintern"]. '.jpg" /><br>';
*/

/**
* 	Nachfolgende Episoden:
*
echo 'Name:  '.$suche["upcoming_episodes"][0]["db"]["name"]. '<br>';
echo 'Folge: '.$suche["upcoming_episodes"][0]["track_title"]. '<br>';
echo 'Desc:  '.$suche["upcoming_episodes"][0]["db"]["description"]. '<br>';
echo 'Img:  <img src="http://static.reliveradio.de/logos/'.$suche["upcoming_episodes"][0]["db"]["slugintern"]. '.jpg" /><br>';
*/


/**
*	Schleifen Test:
*
for($i = 0; $i < count($suche["upcoming_episodes"][0]); ++$i) {
   	echo '<tr class="chaptertr oddchapter loaded" data-start="0.5" data-end="1.5" data-img="..."><td class="starttime"><span>00:01</span></td><td class="chaptername">'.$suche["upcoming_episodes"][$i]["db"]["name"]. ' - '.$suche["upcoming_episodes"][$i]["track_title"]. '</td><td class="timecode"><span>0:01</span></td></tr>';
}
*/
                            

?>

<?php
echo'<pre>';
print_r(json_decode($jsonfile));
echo'<pre>';
?>