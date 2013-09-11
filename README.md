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

<h4>Unterstützen</h4>
<a href="http://flattr.com/thing/973782/ReliveRadio-de-Podcasts-rund-um-die-Uhr">
<img src="https://a248.e.akamai.net/camo.github.com/739a757846f69c1cc10163619eec008e871b591b/687474703a2f2f6170692e666c617474722e636f6d2f627574746f6e2f666c617474722d62616467652d6c617267652e706e67" 
alt="Flattr This" title="Flattr This" style="max-width:100%;"> ReliveRadio</a> <br />
<a href="https://flattr.com/profile/mccouman">
<img src="https://a248.e.akamai.net/camo.github.com/739a757846f69c1cc10163619eec008e871b591b/687474703a2f2f6170692e666c617474722e636f6d2f627574746f6e2f666c617474722d62616467652d6c617267652e706e67" 
alt="Flattr This" title="Flattr This" style="max-width:100%;"> Michael McCouman jr.</a> 
<h2>RSWP: Der Standalone WebPlayer</h2>
<a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php"><img height="430px"src="https://raw.github.com/McCouman/ReLiveRadio-JsonP-about-Ajax/master/screen2.png"></a>
<pre>/**
* @API: Relive Standalone WebPlayer 
* @info: Aufbau und veränderter Podlove Standalone WebPlayer mit eigenen IDs, 
*        auslesen der ReLive-Json List, Ajax Callbacks über JsonP, Einbau der RPSA & RPCA APIs
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 0.1.0 - 2.1.2rc RSWP
*/</pre>

<h3>RPStA: Relive Player Stream API</h3>
<b>Der Player kann in den Relive die Hochaufgelösten, wie auch Mobilen Streams <i>mix, technik, kultur</i> und über 
<i>mix-mobile, technik-mobile, kultur-mobile</i>die RPStA API angesprochen werden: </b><br>
Das einbinden des Streams erfolgt über: <code>standalone.php?css=STREAM</code>
<ul>
<li>Mix: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php?stream=mix"><code>standalone.php?stream=mix</code></a></li>
<li>Mix Mobile: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php?stream=mix-mobile"><code>standalone.php?stream=mix-mobile</code></a></li>
<li>Technik: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php?stream=technik"><code>standalone.php?stream=technik</code></a></li>
<li>Technik Mobile: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php?stream=technik-mobile"><code>standalone.php?stream=technik-mobile</code></a></li>
<li>Kultur: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php?stream=kultur"><code>standalone.php?stream=kultur</code></a></li>
<li>Kultur Mobile: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php?stream=kultur-mobile"><code>standalone.php?stream=kultur-mobile</code></a></li>
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
<li>Standard: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php"><code>standalone.php</code></a> //Black Player</li>
<li>Mix: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php?css=mix"><code>standalone.php?css=mix</code></a> //Green</li>
<li>Technik: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php?css=technik"><code>standalone.php?css=technik</code></a> //light</li>
<li>Kultur: <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php?css=kultur"><code>standalone.php?css=kultur</code></a> //orange</li>
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
<li>Bsp.: Rot <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php?color=f00"><code>standalone.php?color=f00</code></a></li>
<li>Bsp.: Blau <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php?color=44f"><code>standalone.php?color=44f</code></a></li>
<li>Bsp.: Lila <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php?color=a0a"><code>standalone.php?color=a0a</code></a></li>
<li>Bsp.: Pink <a target="_blank" href="http://cm.wikibyte.org/testcodes/neu-chapters/test.php?color=f0f"><code>standalone.php?color=f0f</code></a></li>
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
* @version: 1.1.2 chapter api
*/</pre>


<h2>RWIS: Relive in Wordpress einbinden:</h2>
Zum Einbinden des Relive Webplayers in Wordpress, kann der RWS Shortcode genutzt werden. 

<h3>Wordpress Widget</h3>
<pre>/**
* @Widget: RWIW - Relive Webplayer Iframe Widget
* @info: Widget zum Einbinden des Relive Mini WebPlayers in die Wordpress Sidebar
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 1.0.5 iframe widget
*/</pre>

<h5>Plugin Download</h5>
<img src="https://raw.github.com/McCouman/ReLiveRadio-JsonP-about-Ajax/master/Wordpress-ReliveRadio-Shortcode/relive-radio-widget/screen-widget.png">

Um Relive als Player in die Sidbare einzubinden, kann das folgendes PlugIn kostenlos heruntergeladen werden:<br>
<a href="https://github.com/McCouman/ReLiveRadio-JsonP-about-Ajax/blob/master/Wordpress-ReliveRadio-Shortcode/relive-plugin-widget.php.zip?raw=true">Download</a>

<h3>Wordpress Shortcode</h3>
<pre>/**
* @Shortcode: RWIS - Relive Webplayer Iframe Shortcode
* @info: Shortcode zum Einbinden des Relive WebPlayers in eine Wordpress Seite
* @developer: <a href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 1.5 iframe shortcode
*/</pre>

<h5>Plugin Download</h5>
Um Relive als Player in ein Projekt einzubinden kann das folgendes PlugIn kostenlos heruntergeladen werden:<br>
<a href="https://github.com/McCouman/ReLiveRadio-JsonP-about-Ajax/blob/master/Wordpress-ReliveRadio-Shortcode/relive-radio-shortcode.zip?raw=true">Download</a>

<h5>Einbinden des Shordcodes</h5>
<code>[relive-radio  stream="mix"  style="mix"  color="f00"  l="-10px"  r="-10px"  t="-20px"  b="-50px"  height="560"  width="99%"]</code>

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



<h1>Lizenzen</h1>
<h2>Relive Standalone LiveWebplayer</h2>
<pre>/*
 * ==========================================================
 * ReliveRadio Livestream Webplayer for iframe integration & APIs
 * Project RRJA WebPlayer Project
 * Licensed under The BSD 2-Clause License
 * http://opensource.org/licenses/BSD-2-Clause
 * ==========================================================
 */</pre>
<pre>/**
* @API: Relive Standalone WebPlayer 
* @info: Aufbau und veränderter Podlove Standalone WebPlayer mit eigenen IDs, 
*        auslesen der ReLive-Json List, Ajax Callbacks über JsonP, Einbau der RPSA & RPCA APIs
* @developer: <a style="color: #08C;" href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 0.1.0 - 2.1.10rc RSWP
*/</pre>

Name: <a style="color: #08C;" href="http://reliveradio.de/">ReliveRadio</a> Livestream Webplayer
URI: <a style="color: #08C;" href="https://github.com/McCouman/ReLiveRadio-JsonP-about-Ajax">https://github.com/McCouman/ReLiveRadio-JsonP-about-Ajax</a>
Description: ReliveRadio iFrame and API integration in RRJA Standalone WebPlayer.

Copyright (c) 2013, Wikibyte.org - All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

####**Unterstützen**
<a style="color: #08C;" href="http://flattr.com/thing/973782/ReliveRadio-de-Podcasts-rund-um-die-Uhr"><img src="https://a248.e.akamai.net/camo.github.com/739a757846f69c1cc10163619eec008e871b591b/687474703a2f2f6170692e666c617474722e636f6d2f627574746f6e2f666c617474722d62616467652d6c617267652e706e67" 
alt="Flattr This" title="Flattr This" style="max-width:100%;"> ReliveRadio</a>

<br>


###**RRLWP - API**###
<pre>/**
* @API: PRStA 
* @info: Player Stream API zum verwenden der Relive Stream Bereiche in Standard und Mobile MP3 Daten
* @developer: <a style="color: #08C;" href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 2.2.0 stream api
*/</pre>
<pre>/**
* @API: PRSA 
* @info: Player Style API zum verwenden des Players in den Relive Themen Farbe
* @developer: <a style="color: #08C;" href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 2.0rc styles api
*/</pre>
<pre>/**
* @API: RPCA
* @info: Player Farbe kann über die Color API selber eingefärbt werden
* @developer: <a style="color: #08C;" href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 2.0rc new coloring api
*/</pre>
<pre>/**
* @API: RCA
* @info: Dynamische Chapter.txt über Json durch <a style="color: #08C;" href="https://github.com/i42n/reliveradio-sendeplan-rails/">reliveradio-sendeplan-rails</a>
* @developer: <a style="color: #08C;" href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 1.1.2 chapter api
*/</pre>

Version: 2.1.10 
Author: <a style="color: #08C;" href="https://github.com/McCouman">Michael McCouman jr.</a>
Author URI: http://labs.wikibyte.org/ 
License: BSD 2-Clause License 
License URI: http://opensource.org/licenses/BSD-2-Clause 

Copyright (c) 2013, Wikibyte.org - All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

####**Unterstützen**
<a style="color: #08C;" href="http://flattr.com/thing/973782/ReliveRadio-de-Podcasts-rund-um-die-Uhr"><img src="https://a248.e.akamai.net/camo.github.com/739a757846f69c1cc10163619eec008e871b591b/687474703a2f2f6170692e666c617474722e636f6d2f627574746f6e2f666c617474722d62616467652d6c617267652e706e67" 
alt="Flattr This" title="Flattr This" style="max-width:100%;"> ReliveRadio</a> 
<a style="color: #08C;" href="https://flattr.com/profile/mccouman"><img src="https://a248.e.akamai.net/camo.github.com/739a757846f69c1cc10163619eec008e871b591b/687474703a2f2f6170692e666c617474722e636f6d2f627574746f6e2f666c617474722d62616467652d6c617267652e706e67" 
alt="Flattr This" title="Flattr This" style="max-width:100%;"> Michael McCouman jr.</a>

<br>


<h2>Wordpress Relive WebPlayer Plugins</h2>
###**Wordpress Shortcode**
<pre>/*
 * ==========================================================
 * ReliveRadio Livestream Webplayer Plugin (RRJA Project)
 * Plugin for Wordpress (iFrame Shortcode)
 * Licensed under The BSD 2-Clause License
 * http://opensource.org/licenses/BSD-2-Clause
 * ==========================================================
 */</pre>
<pre>/**
* @Shortcode: RWIS - Relive Webplayer Iframe Shortcode
* @info: Shortcode zum Einbinden des Relive WebPlayers in eine Wordpress Seite
* @developer: <a style="color: #08C;" href="https://flattr.com/profile/mccouman">Michael McCouman jr.</a>
* @version: 1.5 iframe shortcode
*/</pre>

Name: <a style="color: #08C;" href="http://reliveradio.de/">ReliveRadio</a> Livestream Webplayer 
URI:  <a style="color: #08C;" href="https://github.com/McCouman/ReLiveRadio-JsonP-about-Ajax/tree/master/Wordpress-ReliveRadio-Shortcode/relive-radio-shortcode">https://github.com/McCouman/ReLiveRadio-JsonP-about-Ajax/tree/master/Wordpress-ReliveRadio-Shortcode/relive-radio-shortcode</a>
Description: ReliveRadio Plugin for WordPress iframe and implemented through a live stream media player by RRJA WebPlayer project. 
Version: 1.5.1  
Author: <a style="color: #08C;" href="https://github.com/McCouman">Michael McCouman jr.</a> 
Author URI: http://labs.wikibyte.org/ 
License: BSD 2-Clause License 
License URI: http://opensource.org/licenses/BSD-2-Clause  

Copyright (c) 2013, Wikibyte.org - All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

####**Unterstützen**
<a style="color: #08C;" href="https://flattr.com/profile/mccouman"><img src="https://a248.e.akamai.net/camo.github.com/739a757846f69c1cc10163619eec008e871b591b/687474703a2f2f6170692e666c617474722e636f6d2f627574746f6e2f666c617474722d62616467652d6c617267652e706e67" 
alt="Flattr This" title="Flattr This" style="max-width:100%;"> Michael McCouman jr.</a>

<br>


###**Wordpress Relive Web Player Widget**
<pre>/*
 * ==========================================================
 * ReliveRadio Stream Miniplayer Plugin (RRJA Project)
 * Plugin for Wordpress (iFrame Widget)
 * Licensed under The BSD 2-Clause License
 * http://opensource.org/licenses/BSD-2-Clause
 * ==========================================================
 */</pre>
<pre>/**
* @Widget: RWIW - Relive Webplayer Iframe Widget
* @info: Widget zum Einbinden des Relive Mini WebPlayers in die Wordpress Sidebar
* @developer: Michael McCouman jr.
* @version: 1.1.12 iframe widget
*/</pre>


Name: <a style="color: #08C;" href="http://reliveradio.de/">ReliveRadio</a> Livestream Miniplayer  
URI: <a href="https://github.com/McCouman/ReLiveRadio-JsonP-about-Ajax/tree/master/Wordpress-ReliveRadio-Shortcode/relive-radio-widget">https://github.com/McCouman/ReLiveRadio-JsonP-about-Ajax/tree/master/Wordpress-ReliveRadio-Shortcode/relive-radio-widget</a>
Description: ReliveRadio Plugin for WordPress iframe and implemented through a live stream media player by RRJA WebPlayer project. 
Version: 1.1.12  
Author: <a style="color: #08C;" href="https://github.com/McCouman">Michael McCouman jr.</a>  
Author URI: http://labs.wikibyte.org/
License: BSD 2-Clause License 
License URI: http://opensource.org/licenses/BSD-2-Clause  

Copyright (c) 2013, Wikibyte.org - All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

####**Unterstützen**
<a style="color: #08C;" href="https://flattr.com/profile/mccouman"><img src="https://a248.e.akamai.net/camo.github.com/739a757846f69c1cc10163619eec008e871b591b/687474703a2f2f6170692e666c617474722e636f6d2f627574746f6e2f666c617474722d62616467652d6c617267652e706e67" 
alt="Flattr This" title="Flattr This" style="max-width:100%;"> Michael McCouman jr.</a>


<br>

<h2>Podlove Web Payer Lizenz</h2>
<pre>/*
 * ===========================================
 * Podlove Web Player v2.1.0
 * Licensed under The BSD 2-Clause License
 * http://opensource.org/licenses/BSD-2-Clause
 * ===========================================
 */</pre>

Plugin Name: Podlove Web Player 
Plugin URI: http://podlove.org/podlove-web-player/ 
Description: Video and audio plugin for WordPress built on the MediaElement.js HTML5 media player library. 
Version: 2.1.0 
Author: Podlove Team - <a style="color: #08C;" href="https://github.com/gerritvanaaken/">Gerrit van Aaken</a>, <a style="color: #08C;" href="https://github.com/simonwaldherr/">Simon Waldherr</a>, <a style="color: #08C;" href="https://github.com/Kambfhase/">Frank Hase</a>, <a style="color: #08C;" href="https://github.com/eteubert/">Eric Teubert</a> and <a style="color: #08C;" href="https://github.com/podlove/podlove-web-player/contributors">others</a><br>
Author URI: http://podlove.org/ 
License: BSD 2-Clause License
License URI: http://opensource.org/licenses/BSD-2-Clause 

Copyright (c) 2013, Podlove.org - All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

####**Unterstützen**
<a style="color: #08C;" href="http://flattr.com/thing/728463/Podlove-Podcasting-Plugin-for-WordPress"><img src="https://a248.e.akamai.net/camo.github.com/739a757846f69c1cc10163619eec008e871b591b/687474703a2f2f6170692e666c617474722e636f6d2f627574746f6e2f666c617474722d62616467652d6c617267652e706e67" 
alt="Flattr This" title="Flattr This" style="max-width:100%;"> Podlove Pubisher & WebPlayer.</a>