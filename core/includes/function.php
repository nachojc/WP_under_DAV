<?php

// Exit if accessed directly

/**
 * Theme's Functions and Definitions
 *
 *
 * @file           functions.php
 * @package        Underwood
 * @author         AleLeo
 * @copyright      2014 
 * @license        license.txt
 * @version        Release: 1.0.0
 * @filesource     wp-content/themes/underwood/core/includes/functions.php
 * @link           http://
 * @since          available since Release 1.0
 */
?>
<?php


function underwood_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'underwood' ),
		'id' => 'sidebar-1',
		'description' => __( 'Barra de herramientas principal de UnderWood Theme', 'underwood' ),
		'before_widget' => '<section id="%1$s" class="row-main pull-right separator-10 widget %2$s"><div class="sidebar_widget">',
		'after_widget' => '</div></section>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	register_sidebar( array(
		'name' => __( 'Segunda Barra (no asignada)', 'underwood' ),
		'id' => 'sidebar-2',
		'description' => __( 'Barra Pie UnderWood Theme', 'underwood' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
function custom_excerpt_length( $length ) {
	return 40;
}
function excerpt_leermas() {
       global $post;
	return ;
    return '<a href="'. get_permalink($post->ID) . '"> Leer más...</a>';
}

function auto_post_thumbnail() {
          global $post;
          $already_has_thumb = has_post_thumbnail($post->ID);
              if (!$already_has_thumb)  {
              $attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );
                          if ($attached_image) {
                                foreach ($attached_image as $attachment_id => $attachment) {
                                set_post_thumbnail($post->ID, $attachment_id);
                                }
                           } else {
//                                set_post_thumbnail($post->ID, '82537');//ID de imagen por defecto
                           }
                        }
      }
function getfirstimage(){
    global $post;
    $already_has_thumb = has_post_thumbnail($id);
    if (!$already_has_thumb)  {
    $attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );

            if ($attached_image) {
                    foreach ($attached_image as $attachment_id => $attachment) {
                        set_post_thumbnail($id, $attachment_id);
                        break;
                    }
            }
    }
    if (!$already_has_thumb)  {
            return '<img src="'.obtener_primer_imagen_post().'" >';
    }
    return get_the_post_thumbnail($id, 'thumbnail');
}
	
	
function obtener_primer_imagen_post() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];
 
  if(empty($first_img)){ //* Imagen a utilizar por defecto
    $first_img = "/images/imagendefault.png";
  }
  return $first_img;
}
	
	
 //Final de la función
add_action('the_post', 'auto_post_thumbnail');
add_action('save_post', 'auto_post_thumbnail');
add_action('draft_to_publish', 'auto_post_thumbnail');
add_action('new_to_publish', 'auto_post_thumbnail');
add_action('pending_to_publish', 'auto_post_thumbnail');
add_action('future_to_publish', 'auto_post_thumbnail');

add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'img_stick', 250, 170 );
}


add_filter('excerpt_more', 'excerpt_leermas');
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
add_action( 'widgets_init', 'underwood_widgets_init' );


function get_the_content_rss($palabras) {
	$aAux= array();
	$content = "";
	$aAux=explode(" ",get_the_excerpt());
	for ($i=1;$i<$palabras;$i++) $content.= $aAux[$i-1]." ";
	

	return $content." ...";
}




?>