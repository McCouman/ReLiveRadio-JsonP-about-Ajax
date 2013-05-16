ReLiveRadio-JsonP-about-Ajax
============================

Ajax Test für WebPlayer


Siehe auch: http://cm.wikibyte.org/testcodes/


Install:

open the file:
.../testcodes/inc/inc.setup.php

<pre>
<?php
/**
*
*  TESTSYSTEM für Relive ausgabe über Ajax & JsonP
*
*	@Developer: Michael McCouman jr.
*	@Mail: Support@wikibyte.org
* 	@Version: 0.1.a
*
*/


//Install Url des Packetes
global $url_plugin;
$url_plugin = <span style="color:#f00;">"http://domain.tld/testcodes/"</span>; //<= Url eingeben

//Json URL von Relive Radio
$url_rrjson = "http://programm.reliveradio.de/api/today-info";


?>
</pre>
