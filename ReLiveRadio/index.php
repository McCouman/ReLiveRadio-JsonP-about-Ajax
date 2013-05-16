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
	echo '</ul>';
		
		echo '<div id="ii"><span class="expand html5">geladen</span></div>';
	?>               
</div>
<!--//Relive Out-->		




</body>
</html>