<?php
/*
Plugin Name:  Image Switcher
Plugin URI:   https://developer.wordpress.org/plugins/image-switcher
Description:  This is just simple wordpress image switcher plugin. You can switch image through hovering.
Version:      1.1
Author:       <a href="http:khanit.org">Saiem Khan</a>
Author URI:   http:khanit.org/members/saiem-khan
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


define('image_switcher_path',plugin_dir_path(__FILE__));
define('image_switcher_url',plugin_dir_url(__FILE__));




//Enqueue all required scripts for admin

function image_switcher_enqueue_admin(){

	/**
	 * Enqueue Admin scripts
	 *
	 */
		
		wp_enqueue_script('jquery');
		wp_enqueue_style( 'wp-color-picker' );
		wp_enqueue_media();

    wp_enqueue_script( 'wp-color-picker-alpha', plugins_url( 'assets/library/wp-color-picker-alpha.min.js',  __FILE__ ), array( 'wp-color-picker' ), '1.0.0', true );

    wp_enqueue_script( 'media_uploader_plugin', image_switcher_url.'assets/library/wp_media_uploader.js', array( 'jquery' ), true, true );
    wp_enqueue_script('jquery-ui-core');

    wp_enqueue_script( 'image_switcher_js', image_switcher_url.'assets/admin-scripts/script.js', array( 'wp-color-picker-alpha','media_uploader_plugin' ), true, true );

    wp_enqueue_style( 'image_switcher_css', image_switcher_url.'assets/admin-scripts/style.css');

wp_localize_script( "image_switcher_js", "switcher", array(

'url' => image_switcher_url.'assets/img/placeholder-blue.png',
'alt_url' => image_switcher_url.'assets/img/placeholder-red.png',

) );
	
}

add_action( 'admin_enqueue_scripts', 'image_switcher_enqueue_admin' );






//Enqueue all required scripts for general


function image_switcher_enqueue(){

	/**
	 * Enqueue scripts
	 *
	 */

	wp_enqueue_style('image_switcher_css', image_switcher_url.'assets/general-scripts/style.css',array(), 1.0, 'all' );
}

add_action( 'wp_enqueue_scripts', 'image_switcher_enqueue' );



//add setting link and rating link

add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'image_switcher_extra_links', 10, 5 );

function image_switcher_extra_links( $actions, $plugin_file ) 
{

	 $mylinks = array(
	 '<a href="' . admin_url( 'options-general.php?page=image_switcher' ) . '">Settings</a>',
	 '<a style="color:green;" href="https://wordpress.org/plugins/image-switcher">Rate Us</a>'
	 );
	return array_merge( $actions, $mylinks );

}


	/**
	 * register shortcodes
	 *
	 */



/**
 * Returns the parsed shortcode.
 *
 *
*/


function shortcode_callback_image_switcher( $atts = array(), $content = '' ) {

	
	$atts = extract(shortcode_atts( array(
		'url' => image_switcher_url.'assets/img/placeholder-blue.png',
		'alt_url' => image_switcher_url.'assets/img/placeholder-red.png',
		'force_height' => null,
		'heading' => '',
		'alt_heading' => '',
		'text' => '',
		'alt_text' => '',
		'heading_color' => 'teal',
		'text_color' => 'blue',
		'heading_size' => '24px',
		'text_size' => '14px',
		'position' => 'Bottom',
		'event' => 'hover',
		'background' => 'rgba(0,0,0,.5)',
		'link'=> '#',

	), $atts));

	if(strtolower($position) == 'top'){

		$position = 'top:0px;';

	}else if(strtolower($position) == 'bottom'){
		$position = 'bottom:0px;';
	}else if(strtolower($position) == 'left'){

		$position = 'bottom:0px;top:0px;right:inherit;left:0;';

	}else if(strtolower($position) == 'right'){

		$position = 'bottom:0px;top:0px;right:0px;left:inherit;';

	}



	ob_start();
  
	$force_height= (null != $force_height) ? $force_height : 'inherit';

	echo '<div style="height:'.$force_height.';" class="img_switch_wrap">

<a href="'.$link.'">

<img class="img_switch_image" src="'.$url.'" alt="" style="height:'.$force_height.';">
<img class="img_switch_image" src="'.$alt_url.'" alt="" style="height:'.$force_height.';">

';



if(!empty($text) || !empty($alt_text) || !empty($alt_heading) || !empty($heading)):

echo '

<div class="img_switch_contents" style="'.$position.' background:'.$background.'">
<h2 style="color:'.$heading_color.'; font-size:'.$heading_size.';">
'.$heading.'
</h2>
<p style="color:'.$text_color.'; font-size:'.$text_size.';">
'.$text.'
</p>
</div>
<div class="img_switch_contents_" style="'.$position.' background:'.$background.'">
<h2 style="color:'.$heading_color.'; font-size:'.$heading_size.';">
'.$alt_heading.'
</h2>
<p style="color:'.$text_color.'; font-size:'.$text_size.';">
'.$alt_text.'
</p>
</div>
</a>
</div>';

endif;


	return ob_get_clean();
}
add_shortcode( 'image_switcher', 'shortcode_callback_image_switcher' );



//Register admin menu


function image_switcher_menu_adder(){

add_submenu_page( 'options-general.php', 'Image Switcher', 'Image Switcher', 'manage_options', 'image_switcher', 'image_switcher_menu_page');

}

add_action('admin_menu','image_switcher_menu_adder');





//Add admin menu

function image_switcher_menu_page(){
include_once image_switcher_path.'admin/admin-page.php';
}
