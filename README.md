ReLiveRadio-JsonP-about-Ajax
============================
<pre>/**
* @API: <a href="https://flattr.com/thing/973782/ReliveRadio-de-Podcasts-rund-um-die-Uhr">ReLive Radio</a> Json API
* @info: Implementierung der neusten Episoden, im Chapters des Podlove-Web-Players.
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 1.2rc
*/</pre>

<b>Standalone WebPlayer unter: </b>
<ul>
<li>http://cm.wikibyte.org/testcodes/neu-chapters/podlove-web-player/standalone.php </li>
</ul>

<b>Testsysteme:</b><br>
<ul>
<li>Siehe auch die API auf dem Testsystem unter: http://cm.wikibyte.org/testcodes/ </li>
<li>WebPlayer Shortcode: http://cm.wikibyte.org/testbereich/test-relive-player/ </li>
</ul>

<b>Entwicklung:</b><br>
<ul>
<li>Ajax Test: <code>http://youdomain.tld/callback-test.php</code></li>
<li>Read Chapters für PWP: <code>http://youdomain.tld/read-relive.php</code></li>
</ul>

<b>Install:</b><br>

<i>Öffne die Datei:</i>
<code>.../testcodes/inc/inc.setup.php</code>

<pre>
&lt;?php
...

//Install Url des Packetes
global $url_plugin;
$url_plugin = <span style="color:#f00;">"http://domain.tld/testcodes/"</span>; //&lt;= Url eingeben

//Json URL von Relive Radio
$url_rrjson = "http://programm.reliveradio.de/api/today-info";


?>
</pre>
