<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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

	//Url Variable
	include('./inc/inc.setup.php');
	include('./inc/inc.js.php');
	include('./inc/inc.css.php');

?>
</head>
<body>



<!--Relive Out-->					
<div id="jsonp_antwort">
	<?php
		
		#Json code
		include('./inc/inc.json-decoder.php');

	echo '<ul>';
		# Rückmeldung zusammenbauen
  		echo "<li><span id='lititle'> ".$suche[0]["artist_name"]. "</span> - " .$suche[0]["track_title"]."</li>";
  		echo "<li><span id='lititle'> ".$suche[1]["artist_name"]. "</span> - " .$suche[1]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[2]["artist_name"]. "</span> - " .$suche[2]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[3]["artist_name"]. "</span> - " .$suche[3]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[4]["artist_name"]. "</span> - " .$suche[4]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[5]["artist_name"]. "</span> - " .$suche[5]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[6]["artist_name"]. "</span> - " .$suche[6]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[7]["artist_name"]. "</span> - " .$suche[7]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[8]["artist_name"]. "</span> - " .$suche[8]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[9]["artist_name"]. "</span> - " .$suche[9]["track_title"]."</li>";
		
		echo "<li><span id='lititle'> ".$suche[10]["artist_name"]. "</span> - " .$suche[10]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[11]["artist_name"]. "</span> - " .$suche[11]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[12]["artist_name"]. "</span> - " .$suche[12]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[13]["artist_name"]. "</span> - " .$suche[13]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[14]["artist_name"]. "</span> - " .$suche[14]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[15]["artist_name"]. "</span> - " .$suche[15]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[16]["artist_name"]. "</span> - " .$suche[16]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[17]["artist_name"]. "</span> - " .$suche[17]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[18]["artist_name"]. "</span> - " .$suche[18]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[19]["artist_name"]. "</span> - " .$suche[19]["track_title"]."</li>";
		
		echo "<li><span id='lititle'> ".$suche[20]["artist_name"]. "</span> - " .$suche[20]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[22]["artist_name"]. "</span> - " .$suche[22]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[22]["artist_name"]. "</span> - " .$suche[22]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[23]["artist_name"]. "</span> - " .$suche[23]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[24]["artist_name"]. "</span> - " .$suche[24]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[25]["artist_name"]. "</span> - " .$suche[25]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[26]["artist_name"]. "</span> - " .$suche[26]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[27]["artist_name"]. "</span> - " .$suche[27]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[28]["artist_name"]. "</span> - " .$suche[28]["track_title"]."</li>";
		echo "<li><span id='lititle'> ".$suche[29]["artist_name"]. "</span> - " .$suche[29]["track_title"]."</li>";
	echo '</ul>';
		
		echo '<div id="ii"><span class="expand html5">geladen</span></div>';
	?>               
</div>
<!--//Relive Out-->		




</body>
</html>