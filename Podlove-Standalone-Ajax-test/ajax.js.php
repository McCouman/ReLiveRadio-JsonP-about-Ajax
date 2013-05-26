<?php
	//read json:
	$jsonfile = file_get_contents('http://testpreview.reliveradio.de/stream/technique.json');

	//DeCode Json Out:
	$suche = json_decode($jsonfile,TRUE);
	


	##### Angaben - Zeit #########
	//Serverzeit
	$timestamp = time();
	$uhrzeit = date("H:i:s",$timestamp);
	
		//Rechner Server: Addierung der Stunden + 02:00:00
		$first 		= 	explode(":",$uhrzeit);
		$second 	= 	explode(":","02:00:59.998");
		$rechner 	= 	mktime(	$first[0] + $second[0], 
								$first[1] + $second[1], 
								$first[2] + $second[2] );
		
	##### Abgleich - Zeit #########
	//ReLive Time (gerade läuft:)
	$retime = substr($suche["live_episode"]["ends"], 11,-6);
		
	//Server Time:
	#$server = date("H:i:s", $rechner);
	$server = 	"20:34:58";
	# Wandler
	//Serverzeit, ReliveZeit:
	$agleich = strtotime($server);
	$bgleich = strtotime($retime);
	
	//Berechne lasttime bis new episode
	$resttime = ($bgleich-$agleich);
		
		
		//Funktion in Sekunden:
		function onlineTime($time) {
    		$time=explode(':',$time);
    		$sec = $time[0];
    		$sec+=$time[1]*60;
    		$sec+=$time[2]*3600;
    			return $sec;
		}
		#$aaa = onlineTime($resttime);
		$aaa = 60999;
		$zu = "";
?>

//this is a "template" for each chapter row
var rowDummy = $('<tr class="chaptertr" data-start="" data-end="" data-img=""><td class="starttime"><span></span></td><td class="chaptername"></td><td class="timecode">\n<span></span>\n</td>\n</tr>');



/**
*	Callback Chapters
*/
setInterval( function jsonp(){

  // Löschen bereits vorhandener JSONP Skripte
  var scripts = document.getElementsByTagName("script");
  for (i=0; i<scripts.length; i++) {
    var url = scripts[i].getAttribute("src");
    if(!url) continue;
    if(url.indexOf("callback")>=0) {
      scripts[i].parentNode.removeChild(scripts[i]);
    }
  }

  // Anlegen und Einfügen des neuen Skripts
  var now = new Date();
  url = "http://cm.wikibyte.org/testcodes/neu-chapters/ajax.php?time="+now.getTime()+"&callback=callback";
  var script = document.createElement("script");
  script.setAttribute("src", url);
  script.setAttribute("type", "text/javascript");
  document.getElementsByTagName("head")[0].appendChild(script);
  
  
}, <?php echo $aaa.$zu; ?>);


//---------------------------- Entgegennahme der Serverantwort
function callback(data) { 
  document.getElementById("jsonp_antwort").innerHTML = data;
}


/**
*	Callback Cover
*/
setInterval( function jsonps(){

  // Löschen bereits vorhandener JSONP Skripte
  var relivecover = document.getElementsByTagName("script");
  for (i=0; i<relivecover.length; i++) {
    var url = relivecover[i].getAttribute("src");
    if(!url) continue;
    if(url.indexOf("relivecoverdata")>=0) {
      relivecover[i].parentNode.removeChild(relivecover[i]);
    }
  }

  // Anlegen und Einfügen des neuen Skripts
  var relivecoverurl = new Date();
  url = "http://cm.wikibyte.org/testcodes/neu-chapters/ajax.php?time="+relivecoverurl.getTime()+"&relivecoverdata=relivecoverdata";
  var relivecoverajax = document.createElement("script");
  relivecoverajax.setAttribute("src", url);
  relivecoverajax.setAttribute("type", "text/javascript");
  document.getElementsByTagName("head")[0].appendChild(relivecoverajax);
  
  
}, <?php echo $aaa.$zu; ?>);


//---------------------------- Entgegennahme der Serverantwort
function relivecoverdata(data) { 
  document.getElementById("ReLiveCover").innerHTML = data;
}


/**
*	Callback Title
*/
setInterval( function jsonps(){

  // Löschen bereits vorhandener JSONP Skripte
  var relivetitle = document.getElementsByTagName("script");
  for (i=0; i<relivetitle.length; i++) {
    var url = relivetitle[i].getAttribute("src");
    if(!url) continue;
    if(url.indexOf("relivetitlenamedata")>=0) {
      relivetitle[i].parentNode.removeChild(relivetitle[i]);
    }
  }

  // Anlegen und Einfügen des neuen Skripts
  var relivetitletturl = new Date();
  url = "http://cm.wikibyte.org/testcodes/neu-chapters/ajax.php?time="+relivetitletturl.getTime()+"&relivetitlenamedata=relivetitlenamedata";
  var relivetitlettajax = document.createElement("script");
  relivetitlettajax.setAttribute("src", url);
  relivetitlettajax.setAttribute("type", "text/javascript");
  document.getElementsByTagName("head")[0].appendChild(relivetitlettajax);
  
}, <?php echo $aaa.$zu; ?>);

//---------------------------- Entgegennahme der Serverantwort
function relivetitlenamedata(data) { 
  document.getElementById("ReLiveTitle").innerHTML = data;
}


/**
*	Callback Descriptions
*/
setInterval( function jsonps(){

  // Löschen bereits vorhandener JSONP Skripte
  var relivedescs = document.getElementsByTagName("script");
  for (i=0; i<relivedescs.length; i++) {
    var url = relivedescs[i].getAttribute("src");
    if(!url) continue;
    if(url.indexOf("relivedescdata")>=0) {
      relivedescs[i].parentNode.removeChild(relivedescs[i]);
    }
  }

  // Anlegen und Einfügen des neuen Skripts
  var relivedescsurl = new Date();
  url = "http://cm.wikibyte.org/testcodes/neu-chapters/ajax.php?time="+relivedescsurl.getTime()+"&relivedescdata=relivedescdata";
  var relivedescajax = document.createElement("script");
  relivedescajax.setAttribute("src", url);
  relivedescajax.setAttribute("type", "text/javascript");
  document.getElementsByTagName("head")[0].appendChild(relivedescajax);
  
}, <?php echo $aaa.$zu; ?>);

//---------------------------- Entgegennahme der Serverantwort
function relivedescdata(data) { 
  document.getElementById("ReLiveDec").innerHTML = data;
}


/**
*	Callback ajax.js
*/
setInterval( function jsonps(){

  // Löschen bereits vorhandener JSONP Skripte
  var reliveajphp = document.getElementsByTagName("script");
  for (i=0; i<reliveajphp.length; i++) {
    var url = reliveajphp[i].getAttribute("src");
    if(!url) continue;
    if(url.indexOf("reliveajaxphpdata")>=0) {
      reliveajphp[i].parentNode.removeChild(reliveajphp[i]);
    }
  }

  // Anlegen und Einfügen des neuen Skripts
  var reliveajaxphpurl = new Date();
  url = "http://cm.wikibyte.org/testcodes/neu-chapters/ajax.php?time="+reliveajaxphpurl.getTime()+"&reliveajaxphpdata=reliveajaxphpdata";
  var reliveajphpajax = document.createElement("script");
  reliveajphpajax.setAttribute("src", url);
  reliveajphpajax.setAttribute("type", "text/javascript");
  document.getElementsByTagName("head")[0].appendChild(reliveajphpajax);
  
}, <?php echo $aaa.$zu; ?>);

//---------------------------- Entgegennahme der Serverantwort
function reliveajaxphpdata(data) { 
  document.getElementById("Pty").innerHTML = data;
}