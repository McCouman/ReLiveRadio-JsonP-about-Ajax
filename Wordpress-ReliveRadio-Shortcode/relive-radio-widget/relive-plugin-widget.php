<?php
/*
Plugin Name:  Relive Radio Widget Plugin
Description:  Ermöglicht das Einbinden des ReliveRadio Miniplayers über die Widgets in die Sidebar
Plugin URI:   http://labs.wikibyte.org
Version:      1.1.2
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
 * Adds Relive_Radio_Widget widget.
 */
class Relive_Radio_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'Relive_Radio_Widget', // Base ID
			'ReliveRadio Miniplayer', // Name
			array( 'description' => __( 'Relive Radio Widget zum Einbinden des Miniplayers', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 * @see WP_Widget::widget()
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		extract( $args );
		//args:
		$title = apply_filters( 'widget_title', $instance['title'] );
		$stream = apply_filters( 'widget_stream', $instance['stream'] );
		$css = apply_filters( 'widget_stream', $instance['css'] );
		
		
		//Start out-----------------------
		echo $before_widget;
		
			//Widget title
			if ( ! empty( $title ) )
				echo $before_title . $title . $after_title;

			//Stream out
			if ( ! empty( $stream ) )
			
			//CSS out
			if ( ! empty( $css ) )
			
			
			echo '<iframe style="border: none; margin-top: -30px; margin-left: -9px;" name="ReliveRadio Miniplayer" 
			src="http://cm.wikibyte.org/testcodes/neu-chapters/standalone-mini-live.php?stream='. $stream . '&css='.$css.'" height="100" width="100%" 
			marginwidth="10" marginheight="10" scrolling="no" border="0">
			</iframe>';

		
		//End out-------------------------
		echo $after_widget;
	}

	/**
	 * Back-end widget form.
	 * @see WP_Widget::form()
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		
		//titel widget:
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'Relive Radio', 'text_domain' );
		}
		
		//stream:
		if ( isset( $instance[ 'stream' ] ) ) {
			$stream = $instance[ 'stream' ];
		}
		else {
			$stream = 'mix';
		}
		
		//style:
		if ( isset( $instance[ 'css' ] ) ) {
			$css = $instance[ 'css' ];
		}
		else {
			$css = 'mix';
		}

?>
	<p>
		<label for="<?php echo $this->get_field_name( 'title' ); ?>">Titel:</label> 
		<input class="widefat" 
		id="<?php echo $this->get_field_id( 'title' ); ?>" 
		name="<?php echo $this->get_field_name( 'title' ); ?>" 
		type="text" 
		value="<?php echo esc_attr( $title ); ?>" />
		
		<br>
		<br>
		
		<label for="<?php echo $this->get_field_name( 'stream' ); ?>">Stream:</label> 
		<div class="inside">
			<select id="<?php echo $this->get_field_id( 'stream' ); ?>" name="<?php echo $this->get_field_name( 'stream' ); ?>">
		<?php
		
		//bedeutet: (Überprüfung innerhalb der Klammer) ? (wenn true) : (wenn falsch); 
		echo '<option'; echo (esc_attr( $stream ) == '') ? ' 
					value="" selected="selected"> -- Bitte Stream aussuchen -- </option>' : ' 
					value=""> -- Bitte Stream aussuchen -- </option>'; 
	##---------
		//Mix
		echo '<option'; echo (esc_attr( $stream ) == 'mix') ? ' 
			value="mix" selected="selected">  Mix </option>' : ' 
			value="mix"> Mix </option>'; 

		//Mix-Mobile
		echo '<option'; echo (esc_attr( $stream ) == 'mix-mobile') ? ' 
			value="mix-mobile" selected="selected">  Mix Mobile </option>' : ' 
			value="mix-mobile"> Mix Mobile</option>';
	##---------			
		//Technik
		echo '<option'; echo (esc_attr( $stream ) == 'technik') ? ' 
			value="technik" selected="selected">  Technik </option>' : ' 
			value="technik"> Technik </option>'; 		
			 	
		//Technik-Mobile
		echo '<option'; echo (esc_attr( $stream ) == 'technik-mobile') ? ' 
			value="technik-mobile" selected="selected"> Technik Mobile </option>' : ' 
			value="technik-mobile"> Technik Mobile </option>';
	##---------	
		//Kultur
		echo '<option'; echo (esc_attr( $stream ) == 'kultur') ? ' 
			value="kultur" selected="selected">  Kultur </option>' : ' 
			value="kultur"> Kultur </option>'; 
			
		//Kultur-Mobile
		echo '<option'; echo (esc_attr( $stream ) == 'kultur-mobile') ? ' 
			value="kultur-mobile" selected="selected"> Kultur Mobile </option>' : ' 
			value="kultur-mobile"> Kultur Mobile </option>'; 
	 		
	 		?>			
			</select>
		</div>
		
		<br>
		
		<p style="font-size:12px;">Suche bitte einen Stream aus, den du in der Sidebar einbinden möchtest!<p/>


<?php 
/**
* 	Versteckter Bereich:
*/
?>	
<div style="display:none;">
		<label for="<?php echo $this->get_field_name( 'css' ); ?>">Style:</label> 
		<input class="widefat" 
		id="<?php echo $this->get_field_id( 'css' ); ?>" 
		name="<?php echo $this->get_field_name( 'css' ); ?>" 
		type="text" value="<?php echo esc_attr( $stream ); 
		// ---Hier von stream übernehmen!--  // ?>" />
</div>
	
	
	</p>
<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 * @see WP_Widget::update()
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['stream'] = ( !empty( $new_instance['stream'] ) ) ? strip_tags( $new_instance['stream'] ) : '';
		$instance['css'] = ( !empty( $new_instance['css'] ) ) ? strip_tags( $new_instance['css'] ) : '';

		return $instance;
	}

} 

//register relive_radio_widget
add_action( 'widgets_init', function() { register_widget( 'Relive_Radio_Widget' ); } );
?>