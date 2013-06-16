<?php
/*
Plugin Name:  Relive Radio Shortcode
Description:  Bindet den Relive Player in eine Seite über einen Shortcode [relive-radio style="mix" color="#f00"]
Plugin URI:   http://labs.wikibyte.org
Version:      1.5
Author:       Michael McCouman jr.
Author URI:   http://wikibyte.org/
Props:        Michael McCouman jr.

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

*/






/**
* 
* Shortcode: Relive Radio Includes 

[relive-radio 
	style="mix" 
	color="f00"                                                                          
	l="-10px" 
	r="-10px" 
	t="-20px"
	b="-50px"
	height="100" 
	width="200%" 
]

*
*/
function rl_include( $atts ) {
   	
   	#
    # create slug array in to shortcode
    extract( shortcode_atts( array(
    	'stream' => 'mix', //mix, mix-mobile, technik, technik-mobile, kultur, kultur-mobile
    	'style' => '', //mix, technik, kultur
   		'color' => '', //f00
    		'l' => '-10px', 
    		'r' => '-10px',
    		't' => '-20px',
     		'b' => '-50px',
    			'height' => '530',
    			'width' => '100%',
    ), $atts ) );
	
	#
	# vars for podbe slugs
	$rlive_stream 	= "{$stream}";
    $rlive_css 		= "{$style}";
    $rlive_coloring = "{$color}";
    	
    	//css styles margins
    	$margin_left 	= "{$l}";
    	$margin_right 	= "{$r}";
    	$margin_top 	= "{$t}";
    	$margin_bottom 	= "{$b}";
    	
    	//iframe
    	$frame_height   = "{$height}";
    	$frame_width 	= "{$width}";
    
    #
    # standalone player
    $relive_player_url = 'http://cm.wikibyte.org/testcodes/neu-chapters/standalone-live.php?stream='.$rlive_stream.'&css='.$rlive_css.'&color='.$rlive_coloring.'';
		
		//player outs
		$relive_player_out = $relive_player_url;
		
		//margins
		$m_left 	= $margin_left;
		$m_right 	= $margin_right;
		$m_top 		= $margin_top;
		$m_bottom 	= $margin_bottom;
		
		//iframes
		$if_height	= $frame_height;
		$if_width	= $frame_width;
    
    #
    # out
	return '<div style="margin-left:'.$m_left.';margin-right:'.$m_right.';margin-top:'.$m_top.';margin-bottom:'.$m_bottom.'; border: none;"><iframe style="border: none;" name="Relive Player" src="'.$relive_player_out.'" height="'.$if_height.'" width="'.$if_width.'" marginwidth="10" marginheight="10" border="0"></iframe></div>';

}
add_shortcode('relive-radio', 'rl_include');


?>