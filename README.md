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

<pre>/**
* @API: <a href="https://flattr.com/thing/973782/ReliveRadio-de-Podcasts-rund-um-die-Uhr">ReLive Radio</a> Json API
* @info: Implementierung der neusten Episoden, im Chapters des Podlove-Web-Players.
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 2.0rc new color and flat design
*/</pre>

<h2>Standalone WebPlayers</h2>

<pre>/**
* @API: PRSA 
* @info: Player Style API zum verwenden des Players in den ReLive Themen Farbe
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 2.0rc styles
*/</pre>

<h3>RPSA: ReLive Players Style API</h3>
<b>Der Player kann in den ReLive Stylefarben für <i>Mix, Technik, Kultur</i> über die RPSA einfach eingefärbt werden: </b><br>
Das einfärben erfolgt über: <code>standalone.php?css=STYLEFARBE</code> wählen.
<ul>
<li>Standrad: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php"><code>standalone.php</code></a> //Black Player</li>
<li>Mix: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?css=mix"><code>standalone.php?css=mix</code></a> //Green</li>
<li>Technik: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?css=technik"><code>standalone.php?css=technik</code></a> //light</li>
<li>Kultur: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?css=kultur"><code>standalone.php?css=kultur</code></a> //orange</li>
</ul>

<h3>RPCA: ReLive Players Color API</h3>

<pre>/**
* @API: RPCA
* @info: Player Farbe kann über die Color API selber eingefärbt werden
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 2.0rc new coloring
*/</pre>

<b>Der Player kann die RPCA auch seperat mit einer eigenen Farbe eingefärbt werden: </b><br>
Das einfärben erfolgt über: <code>standalone.php?color=FARBCODE</code> wählen.
<ul>
<li>Bsp.: Rot <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?color=f00"><code>standalone.php?color=f00</code></a></li>
<li>Bsp.: Blau <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?color=44f"><code>standalone.php?color=44f</code></a></li>
<li>Bsp.: Lila <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?color=a0a"><code>standalone.php?color=a0a</code></a></li>
<li>Bsp.: Pink <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/standalone.php?color=f0f"><code>standalone.php?color=f0f</code></a></li>
</ul>



<h2>Relive Shortcodes:</h2>
<ul>
<li>Siehe auch die API auf dem Testsystem unter: http://cm.wikibyte.org/testcodes/ </li>
<li>WebPlayer Shortcode: http://cm.wikibyte.org/testbereich/ </li>
</ul>
