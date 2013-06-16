Relive Radio WebPlayer 
============================

<h3>Über RRJA WebPlayer Project</h3>
Dies ist ein Webplayer Projekt zum auslesen und wiederverwenden der Json Api Liste von Relive Radio und wird entwickelt von Michael McCouman jr. in Zusammenarbeit mit den 
Gründern von Relive. 

<h4>Ziele</h4>
Ziel diese Projektes ist es die Weiterverarbeitung der täglichen ReLiveRadio Liste, welche über das Json Format ausgegeben wird, 
in die "podlovewebplayer_chapters linked - Liste" des Podlove WebPlayers einzubauen. Dies ermöglicht dem Nutzer, die Übersicht
der noch kommenden Podcastsendungen einzusehen.<br>

<b>Funktionen der Liste: <i>(seit Version 1.2.a)</i></b><br>
Relive Radio ist ein Web-Streaming so ist über die RR-Liste einzusehen, welche Podcasting in den nächsten Stunden
auf Relive ausgestrahlt werden. Über ein Rückinfo (Callback) wird nun die Liste automatisch aktualisiert.
So werden alte Folgen aus der Liste geleert und zeig nur noch die noch kommenden Podcasts an. Dabei muss die Website, 
in der der Player spielt nicht von Hand aktualisiert werden und der Stream bleibt am laufen ohne zu unterbrechen.

<b>Zusätzliche Funktionen: <i>(seit Version 1.3.a)</i></b><br>
Die Ausgabe der gerade laufenden Podcastings werden automatisch mit Coverbild, Podcastname, Titel und Informationen der Sendung
im Webpayer angezeigt. Ist eine Sendung vorbei, so werden alles Informationen automatisch, Live aktualisiert. 


<h2>RSWP: Der Standalone WebPlayer</h2>
<a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php"><img height="430px"src="https://raw.github.com/McCouman/ReLiveRadio-JsonP-about-Ajax/master/screen2.png"></a>
<pre>/**
* @API: Relive Standalone WebPlayer 
* @info: Aufbau und veränderter Podlove Standalone WebPlayer mit eigenen IDs, 
*        auslesen der ReLive-Json List, Ajax Callbacks über JsonP, Einbau der RPSA & RPCA APIs
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 0.1.0 - 2.0rc RSWP
*/</pre>

<h3>RPStA: Relive Player Stream API</h3>
<b>Der Player kann in den Relive die Hochaufgelösten, wie auch Mobilen Streams <i>mix, technik, kultur</i> und über 
<i>mix-mobile, technik-mobile, kultur-mobile</i>die RPStA API angesprochen werden: </b><br>
Das einbinden des Streams erfolgt über: <code>standalone.php?css=STREAM</code>
<ul>
<li>Mix: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone-live.php?stream=mix"><code>standalone-live.php?stream=mix</code></a></li>
<li>Mix Mobile: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone-live.php?stream=mix-mobile"><code>standalone-live.php?stream=mix-mobile</code></a></li>
<li>Technik: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone-live.php?stream=technik"><code>standalone-live.php?stream=technik</code></a></li>
<li>Technik Mobile: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone-live.php?stream=technik-mobile"><code>standalone-live.php?stream=technik-mobile</code></a></li>
<li>Kultur: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone-live.php?stream=kultur"><code>standalone-live.php?stream=kultur</code></a></li>
<li>Kultur Mobile: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone-live.php?stream=kultur-mobile"><code>standalone-live.php?stream=kultur-mobile</code></a></li>
</ul>
<pre>/**
* @API: PRStA 
* @info: Player Stream API zum verwenden der Relive Stream Bereiche in Standard und Mobile MP3 Daten
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 2.1rc stream api
*/</pre>

<h3>RPSA: Relive Player Style API</h3>
<b>Der Player kann in den Relive Stylefarben für <i>Mix, Technik, Kultur</i> über die RPSA einfach eingefärbt werden: </b><br>
Das einfärben erfolgt über: <code>standalone.php?css=STYLEFARBE</code>
<ul>
<li>Standard: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php"><code>standalone.php</code></a> //Black Player</li>
<li>Mix: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?css=mix"><code>standalone.php?css=mix</code></a> //Green</li>
<li>Technik: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?css=technik"><code>standalone.php?css=technik</code></a> //light</li>
<li>Kultur: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?css=kultur"><code>standalone.php?css=kultur</code></a> //orange</li>
</ul>
<pre>/**
* @API: PRSA 
* @info: Player Style API zum verwenden des Players in den Relive Themen Farbe
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 2.0rc styles api
*/</pre>


<h3>RPCA: Relive Player Color API</h3>
<b>Der Player kann die RPCA auch seperat mit einer eigenen Farbe eingefärbt werden: </b><br>
Das einfärben erfolgt über: <code>standalone.php?color=FARBCODE</code>
<ul>
<li>Bsp.: Rot <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?color=f00"><code>standalone.php?color=f00</code></a></li>
<li>Bsp.: Blau <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?color=44f"><code>standalone.php?color=44f</code></a></li>
<li>Bsp.: Lila <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?color=a0a"><code>standalone.php?color=a0a</code></a></li>
<li>Bsp.: Pink <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?color=f0f"><code>standalone.php?color=f0f</code></a></li>
</ul>
<pre>/**
* @API: RPCA
* @info: Player Farbe kann über die Color API selber eingefärbt werden
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 2.0rc new coloring api
*/</pre>


<h2>RCA: Relive Chapter API:</h2>
Zum einfügen den Relive Sendeplanes in den Podlove WebPlayer Shortcodes in WordPress.<br>

<b>Mehr Informationen zur API gibt es auch unter: </b>
<ul>
 <li>Beispiel: http://cm.wikibyte.org/testcodes/ </li>
</ul>

<b>Einfügen in den Shorcode des Podlove Web Players: </b><br>
<code>[podloveaudio src="http:&#47;&#47;stream.reliveradio.de..." chapters="http:&#47;&#47;cm.wikibyte.org/testcodes/chapters.txt"]</code>

<b>Podlove Webplayer mit Relive Liste: </b><br>
<ul>
 <li>Beispiel: http://cm.wikibyte.org/testbereich/test-relive-player/</li>
</ul>
<pre>/**
* @API: RCA
* @info: Dynamische Chapter.txt über Json durch <a href="https://github.com/i42n/reliveradio-sendeplan-rails/">reliveradio-sendeplan-rails</a>
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 0.1.2 chapter api
*/</pre>

<h2>RWIS: Relive in Wordpress einbinden:</h2>
Zum Einbinden des Relive Webplayers in Wordpress, kann der RWS Shortcode genutzt werden. 
<pre>/**
* @Shortcode: RWIS
* @info: Shortcode zum Einbinden des Relive WebPlayers in eine Wordpress Seite
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 1.5 iframe shortcode
*/</pre>

<h5>Plugin Download</h5>
Um Relive als Player in ein Projekt einzubinden kann das folgendes PlugIn kostenlos heruntergeladen werden:<br>
<a href="https://github.com/McCouman/ReLiveRadio-JsonP-about-Ajax/blob/master/Wordpress-ReliveRadio-Shortcode/relive-radio-shortcode.zip?raw=true">Download</a>

<h5>Einbinden des Shordcodes</h5>
<code>[relive-radio  style="mix"  color="f00" l="-10px"  r="-10px"  t="-20px" b="-50px" height="560" width="99%"]</code>

 <ul>
  <li>stream="mix" //Stream auswählen (mix, mix-mobile, technik, technik-mobile, kultur, kultur-mobile)</li>
  <li>style="mix" //Fester Style (mix, technik, kultur)</li>
  <li>color="f00" //Eigene Farbe festlegen</li>
 <li></li>
	 <li>l="-10px" //margin-left</li>
	 <li>r="-10px" //margin-right</li>
	 <li>t="-20px" //margin-top</li>
  <li>b="-50px" //margin-bottom</li>
 <li></li>
	 <li>height="560" //höhe</li>
	 <li>width="100%" //breite</li>
 </ul>
