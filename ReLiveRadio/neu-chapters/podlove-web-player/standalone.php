<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Demo</title>

	<link href="static/podlove-web-player.css" rel="stylesheet" media="screen" type="text/css" />

	<script src="libs/html5shiv.js"></script>
	<script src="libs/jquery-1.9.1.min.js"></script>
	<script src="static/podlove-web-player.js"></script>
	
<style>
.podlovewebplayer_chapterbox.showonplay.active {
height: auto!important;
}
</style>


<script>
//this is a "template" for each chapter row
var rowDummy = $('<tr class="chaptertr" data-start="" data-end="" data-img=""><td class="starttime"><span></span></td><td class="chaptername"></td><td class="timecode">\n<span></span>\n</td>\n</tr>');


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
  
}, 10500);

//---------------------------- Entgegennahme der Serverantwort
function callback(data) { 
  document.getElementById("jsonp_antwort").innerHTML = data;
}










setInterval( function jsonps(){

  // Löschen bereits vorhandener JSONP Skripte
  var scruppts = document.getElementsByTagName("script");
  for (i=0; i<scruppts.length; i++) {
    var url = scruppts[i].getAttribute("src");
    if(!url) continue;
    if(url.indexOf("infodown")>=0) {
      scruppts[i].parentNode.removeChild(scruppts[i]);
    }
  }

  // Anlegen und Einfügen des neuen Skripts
  var nieee = new Date();
  url = "http://cm.wikibyte.org/testcodes/neu-chapters/ajax.php?time="+nieee.getTime()+"&infodown=infodown";
  var infoddd = document.createElement("script");
  infoddd.setAttribute("src", url);
  infoddd.setAttribute("type", "text/javascript");
  document.getElementsByTagName("head")[0].appendChild(infoddd);
  
}, 10500);

//---------------------------- Entgegennahme der Serverantwort
function infodown(data) { 
  /*document.getElementById("jsonp_antwort").innerHTML = data;*/
  document.getElementById("alles").innerHTML = data;
}
</script>
</head>

<body>
	<p>
		<audio id="testplayer">
			<source src="http://stream.reliveradio.de:8000/24mobile.mp3" type="audio/mpeg"></source>
		</audio>

		<script>
			$('#testplayer').podlovewebplayer({
				poster: 'samples/coverimage.png',
				title: 'PWP001 – Lorem ipsum dolor sit amet',
				permalink: '...',
				subtitle: '...',
				chapters: [{'start':'00:00:00.000','title':'a',   'image':''}
									,{'start':'00:00:10.500','title':'Chapter Two',   'image':'samples/coverimage-red.png'}
									,{'start':'00:00:20.500','title':'Chapter Three', 'image':'http://static.reliveradio.de/logos/brainshares.jpg'}
									,{'start':'00:00:30.000','title':'Chapter Four',  'image':'samples/coverimage-blue.png'}],
				summary: '<p>Summary and even links <a href="http://testpreview.reliveradio.de/stream/technique.chapters">Capter</a></p>',
				duration: '24:00.000',
				alwaysShowHours: true,
				startVolume: 0.8,
				width: 'auto',
				summaryVisible: false,
				chaptersVisible: true	
			});
		</script>
	</p>
	
	
	
	<div id="jsonp_antwort">test1</div>
		
		
		
		
		http://testpreview.reliveradio.de/stream/technique.chapters
</body>
</html>