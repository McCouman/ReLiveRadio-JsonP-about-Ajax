ReLive Radio WebPlayer 
============================

<h3>Über RRJA WebPlayer Project</h3>
Dies ist ein Webplayer Projekt zum auslesen und wiederverwenden der Json Api Liste von ReLive Radio und wird entwickelt von Michael McCouman jr. in Zusammenarbeit mit den 
Gründern von Relive. 

<h4>Ziele</h4>
Ziel diese Projektes ist es die Weiterverarbeitung der täglichen ReLiveRadio Liste, welche über das Json Format ausgegeben wird, 
in die "podlovewebplayer_chapters linked - Liste" des Podlove WebPlayers einzubauen. Dies ermöglicht dem Nutzer, die Übersicht
der noch kommenden Podcastsendungen einzusehen.<br>

<b>Funktionen der Liste: <i>(seit Version 1.2.a)</i></b><br>
ReLive Radio ist ein Web-Streaming, so ist über die RR-Liste einzusehen, welche Podcasting in den nächsten Stunden
auf ReLive ausgestrahlt werden. Über ein Rückinfo (Callback) wird nun die Liste automatisch aktualisiert.
So werden alte Folgen aus der Liste geleert und zeig nur noch die noch kommenden Podcasts an. Dabei muss die Website, 
in der der Player spielt nicht von Hand aktualisiert werden und der Stream bleibt am laufen ohne zu unterbrechen.

<b>Zusätzliche Funktionen: <i>(seit Version 1.3.a)</i></b><br>
Die Ausgabe der gerade laufenden Podcastings werden automatisch mit Coverbild, Podcastname, Titel und Informationen der Sendung
im Webpayer angezeit. Ist eine Sendung vorbei, so werden alles Informationen automatisch, Live aktualisiert. 


<h2>RSWP: Der Standalone WebPlayers</h2>
<pre>/**
* @API: ReLive Standalone WebPlayer 
* @info: Aufbau und veränderter Podlove Standalone WebPlayer mit eigenen IDs, 
*        auslesen der ReLive-Json List, Ajax Callbacks über JsonP, Einbau der RPSA & RPCA APIs
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 0.1.0 - 2.0rc RSWP
*/</pre>


<h3>RPSA: ReLive Player Style API</h3>
<b>Der Player kann in den ReLive Stylefarben für <i>Mix, Technik, Kultur</i> über die RPSA einfach eingefärbt werden: </b><br>
Das einfärben erfolgt über: <code>standalone.php?css=STYLEFARBE</code> wählen.
<ul>
<li>Standrad: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php"><code>standalone.php</code></a> //Black Player</li>
<li>Mix: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?css=mix"><code>standalone.php?css=mix</code></a> //Green</li>
<li>Technik: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?css=technik"><code>standalone.php?css=technik</code></a> //light</li>
<li>Kultur: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?css=kultur"><code>standalone.php?css=kultur</code></a> //orange</li>
</ul>
<pre>/**
* @API: PRSA 
* @info: Player Style API zum verwenden des Players in den ReLive Themen Farbe
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 2.0rc styles api
*/</pre>


<h3>RPCA: ReLive Player Color API</h3>
<b>Der Player kann die RPCA auch seperat mit einer eigenen Farbe eingefärbt werden: </b><br>
Das einfärben erfolgt über: <code>standalone.php?color=FARBCODE</code> wählen.
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


<h2>RCA: ReLive Chapter API:</h2>
Zum einfügen den ReLive Sendeplanes in den Podlove WebPlayer Shortcodes in WordPress.<br>

<b>Mehr Informationen zur API gibt es auch unter: </b>
<ul>
 <li>Beispiel: http://cm.wikibyte.org/testbereich/test-relive-player/ </li>
</ul>

<b>Einfügen in den Shorcode des Podlove Web Players: </b><br>
<code>[podloveaudio src="http:&#47;&#47;stream.reliveradio.de..." chapters="http:&#47;&#47;cm.wikibyte.org/testcodes/chapters.txt"]</code>

<b>Podlove Webplayer mit ReLive Liste: </b><br>
<ul>
 <li>Beispiel: http://cm.wikibyte.org/testbereich/ </li>
</ul>
<pre>/**
* @API: RCA
* @info: Dynamische Chapter.txt über Json durch <a href="https://github.com/i42n/reliveradio-sendeplan-rails/">reliveradio-sendeplan-rails</a>
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 0.1.2 chapter api
*/</pre>

<h2>ReLive Shortcodes:</h2>
In Arbeit!
