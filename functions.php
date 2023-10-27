<?php
// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}
require_once( TEMPLATEPATH.'/core/includes/function.php');

function insertarPubliSuperior(){
	echo '<section class="row-main separator-10">';
	include('core/zones/zone-Z6-ROBAPAGINAS-NOTICIAS-SUPERIOR.php');    
	echo '</section>
	<section class="row-main separator-10"></section>
	<section class="row-main separator-10"></section>';
	}


function insertaPubliFinal($content){
	if(is_single() ) {
		
		
		
		$content.= '<section class="row-main separator-10">';
        $content.= file_get_contents(TEMPLATEPATH.'/core/zones/zone-Z6-ROBAPAGINAS-NOTICIAS-INFERIOR.php');    
        $content.= '</section>';
		$content.= '<section class="row-main">';
        $content.= file_get_contents(TEMPLATEPATH.'/core/zones/zone-Z6-ROBAPAGINAS-NOTICIAS-INFERIOR-INFERIOR.php');    
        $content.= '</section>';
		
	}
	return $content;
}
 

function insertaNotaFinal($content) {
		if(is_single() or is_page()) {

				$content.= "<div class='nota'>";
				$content.= "<h3 style='margin:20px 0 0 0'>Te gust&oacute; este art&iacute;culo?</h3>";
				$content.= "<p>Suscr&iacute;bete a nuestro  <a href='". site_url()."/feed/'>RSS feed</a> y no te perder&aacute;s nada.</p>";
				$content.= "</div>";
		}
		return $content;
}

add_filter ('the_content', 'insertaPubliFinal',9);
add_filter ('the_content', 'insertaNotaFinal');
add_filter('autoptimize_filter_speedupper', '__return_false');

function randomCrumb() {
  $random = mt_rand(1, 99999999);
  $random = sprintf("%08s", $random);
  
  return $random;
}

function put_random(){
	echo randomCrumb();
	}
$random = randomCrumb();


add_action('wp_enqueue_scripts', 'script_publi'); 

function script_publi(){
    if (is_page('demopubli')){
    	wp_enqueue_script('publi_home', get_bloginfo('template_directory').'/core/js/homepubli.js');
        wp_enqueue_style('publi_home_css', get_bloginfo('template_directory').'/core/css/home-publi.css');

     }else{
//    	wp_enqueue_script('publi_home', get_bloginfo('template_directory').'/core/js/publi.js');
    	wp_enqueue_style('publi_home_css', get_bloginfo('template_directory').'/core/css/publi.css');
    }
}


function force_jquery_to_footer() {
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js', false, NULL, true );
	wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', ['jquery'], NULL, true );
	wp_register_script( 'custom', site_url().'/wp-content/themes/underwood/core/js/custom.min.js', ['jquery'], NULL, true );
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'custom' );
	
	remove_action( 'wp_head', 'wp_print_scripts' );
    remove_action( 'wp_head', 'wp_print_head_scripts', 9 );
    remove_action( 'wp_head', 'wp_enqueue_scripts', 1 );
 
    add_action( 'wp_footer', 'wp_print_scripts', 5);
    add_action( 'wp_footer', 'wp_enqueue_scripts', 5);
    add_action( 'wp_footer', 'wp_print_head_scripts', 5);
}



add_action( 'wp_enqueue_scripts', 'force_jquery_to_footer' );
remove_action('wp_head', 'wp_generator');



function remove_jquery_from_wp_print_scripts() {
    wp_deregister_script( 'jquery' );
}
add_action( 'wp_print_scripts', 'remove_jquery_from_wp_print_scripts' );

/* Automatically set the image Title, Alt-Text, Caption & Description upon upload
-----------------------------------------------------------------------*/

// add_action( 'add_attachment', 'my_set_image_meta_upon_image_upload' );

function my_set_image_meta_upon_image_upload( $post_ID ) {
    // Check if uploaded file is an image, else do nothing
    if ( wp_attachment_is_image( $post_ID ) ) {
        $my_image_title = get_post( $post_ID )->post_title;
        // Sanitize the title: remove hyphens, underscores & extra
        // spaces:
        $my_image_title = preg_replace( '%\s*[-_\s]+\s*%', ' ',
        $my_image_title );
        // Sanitize the title: capitalize first letter of every word
        // (other letters lower case):
        $my_image_title = ucwords( strtolower( $my_image_title ) );
        // Create an array with the image meta (Title, Caption,
        // Description) to be updated
        // Note: comment out the Excerpt/Caption or Content/Description
        // lines if not needed
        $my_image_meta = array(
        // Specify the image (ID) to be updated
        'ID' => $post_ID,
        // Set image Title to sanitized title
        'post_title' => $my_image_title,
        // Set image Caption (Excerpt) to sanitized title
        'post_excerpt' => $my_image_title,
        // Set image Description (Content) to sanitized title
        'post_content' => $my_image_title,
        );

        // Set the image Alt-Text
        update_post_meta( $post_ID, '_wp_attachment_image_alt',
        $my_image_title );
        // Set the image meta (e.g. Title, Excerpt, Content)
        wp_update_post( $my_image_meta );
    }
}