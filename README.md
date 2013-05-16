ReLiveRadio-JsonP-about-Ajax
============================
@Developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a> für 
<a href="https://flattr.com/thing/973782/ReliveRadio-de-Podcasts-rund-um-die-Uhr">ReLive Radio</a> Json API über 
Ajax, für die Implementierung der neusten Sendungen, im Chapters des Podlove Web Players.


Siehe auch das Testsystem unter:<br> http://cm.wikibyte.org/testcodes/<br>

Test Webplayer: http://cm.wikibyte.org/testbereich/test-relive-player/


<b>Install:</b>

<i>Öffne die Datei:</i>
<code>.../testcodes/inc/inc.setup.php</code>

<pre>
&lt;?php
/**
*
*  TESTSYSTEM für Relive ausgabe über Ajax & JsonP
*  -----------------------------------------------
*  
*  ....
*  
*/


//Install Url des Packetes
global $url_plugin;
$url_plugin = <span style="color:#f00;">"http://domain.tld/testcodes/"</span>; //&lt;= Url eingeben

//Json URL von Relive Radio
$url_rrjson = "http://programm.reliveradio.de/api/today-info";


?>
</pre>
