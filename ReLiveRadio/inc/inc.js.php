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

//Include URL variable
include('./inc.setup.php');

?>
<script>
/**
*
*	TESTSYSTEM für Relive ausgabe über Ajax & JsonP
*
*	@Developer: Michael McCouman jr.
*	@Mail: Support@wikibyte.org
* 	@Version: 0.1.a
*
*/
setInterval( function jsonp(){
  
  
  // Löschen bereits vorhandener JSONP Skripte
  var scripts = document.getElementsByTagName("script");
  for (i=0; i<scripts.length; i++) {
    var url = scripts[i].getAttribute("src");
    if(!url) continue;
    if(url.indexOf("callback")>=0) {
      scripts[i].parentNode.removeChild(scripts[i]);
    }
  }

  // Anlegen und Einfügen des neuen Skripts
  var now = new Date();
  url = "<?php echo $url_plugin; ?>ajax/ajax.php?time="+now.getTime()+"&callback=callback";
  var script = document.createElement("script");
  script.setAttribute("src", url);
  script.setAttribute("type", "text/javascript");
  document.getElementsByTagName("head")[0].appendChild(script);
  
}, 10500);

// Entgegennahme der Serverantwort
function callback(data) { 
  document.getElementById("jsonp_antwort").innerHTML = data;
}
</script>