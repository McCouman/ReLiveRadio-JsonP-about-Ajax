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
	

	//test:
	#$jsonfile = file_get_contents($url_plugin.'test/read-json-test.php');
	//output
    #echo $jsonfile;
    
    
    
	//Original Json von Relive Radio:
	$jsonfile = file_get_contents($url_rrjson);
	
	//DeCode Json out:
	$suche = json_decode($jsonfile,TRUE);

?> 