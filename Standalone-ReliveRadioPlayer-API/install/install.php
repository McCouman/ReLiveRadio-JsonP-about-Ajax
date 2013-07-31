<?php
/**
*	Install Webplayer
*
**/
#global $setup_url;

//install URI
$setup_url = "http://cm.wikibyte.org/testcodes/neu-chapters";


//Standrad Listenanzahl festelegen
$anzahl = 6;  

//Callback für JS in ms
#$setup_ms_callback = 60999;
$setup_ms_callback = 7999; //test


$dec_max_limet = 10; //Textausgabe der Description

//JS Data URLs
$js_mix_ajax_link = $setup_url. "/ajax-mix.php"; 		//JS - Mix
$js_ajax_link_tec = $setup_url. "/ajax-technik.php"; 	//JS - Technik
$js_ajax_link_kul = $setup_url. "/ajax-kultur.php"; 	//JS - Kultur


?>