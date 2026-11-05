<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}

function insertarPubliSuperior()
{
  echo '<section class="row-main separator-10">';
  include('core/zones/zone-Z6-ROBAPAGINAS-NOTICIAS-SUPERIOR.php');
  echo '</section>
	<section class="row-main separator-10"></section>
	<section class="row-main separator-10"></section>';
}


include_once(get_template_directory() . '/core/includes/function.php');


add_filter('the_content', 'insertaOtherNotes', 7);
add_filter('the_content', 'insertaPubliFinal', 8);
add_filter('the_content', 'insertaNotaFinal', 9);
add_filter('autoptimize_filter_speedupper', '__return_false');



function put_random()
{
  echo randomCrumb();
}


add_action('wp_enqueue_scripts', 'script_publi');

function script_publi()
{
  if (is_page('demopubli')) {
    wp_enqueue_script('publi_home', get_bloginfo('template_directory') . '/core/js/homepubli.js');
    wp_enqueue_style('publi_home_css', get_bloginfo('template_directory') . '/core/css/home-publi.css');
  } else {
    //    	wp_enqueue_script('publi_home', get_bloginfo('template_directory').'/core/js/publi.js');
    wp_enqueue_style('publi_home_css', get_bloginfo('template_directory') . '/core/css/publi.css');
  }
}



// remove_action('wp_head', 'wp_generator');
add_action('wp_enqueue_scripts', 'force_jquery_to_footer');

function force_jquery_to_footer()
{
  remove_action('wp_head', 'wp_print_scripts');
  remove_action('wp_head', 'wp_print_head_scripts', 9);
  remove_action('wp_head', 'wp_enqueue_scripts', 1);
  
  
  wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', ['jquery'], NULL, true);
  wp_register_script('custom', site_url() . '/wp-content/themes/underwood/core/js/custom.1.0.min.js', ['jquery'], NULL, true);
  wp_enqueue_script('bootstrap', ['jquery'], NULL, array('strategy'  => 'defer',));
  wp_enqueue_script('custom', ['jquery'], NULL, array('strategy'  => 'defer',));
  
  // add_action('wp_footer', 'wp_print_scripts', 5);
  add_action('wp_footer', 'wp_enqueue_scripts', 5);
  add_action('wp_footer', 'wp_print_head_scripts', 5);

}

// add_action('wp_print_scripts', 'remove_jquery_from_wp_print_scripts');
// function remove_jquery_from_wp_print_scripts()
// {
//   wp_dequeue_script('jquery');
// }

// /* Automatically set the image Title, Alt-Text, Caption & Description upon upload
// -----------------------------------------------------------------------*/

// add_action('add_attachment', 'my_set_image_meta_upon_image_upload');

// function my_set_image_meta_upon_image_upload($post_ID)
// {
//   // Check if uploaded file is an image, else do nothing
//   if (wp_attachment_is_image($post_ID)) {
//     $my_image_title = get_post($post_ID)->post_title;
//     // Sanitize the title: remove hyphens, underscores & extra
//     // spaces:
//     $my_image_title = preg_replace(
//       '%\s*[-_\s]+\s*%',
//       ' ',
//       $my_image_title
//     );
//     // Sanitize the title: capitalize first letter of every word
//     // (other letters lower case):
//     $my_image_title = ucwords(strtolower($my_image_title));
//     // Create an array with the image meta (Title, Caption,
//     // Description) to be updated
//     // Note: comment out the Excerpt/Caption or Content/Description
//     // lines if not needed
//     $my_image_meta = array(
//       // Specify the image (ID) to be updated
//       'ID' => $post_ID,
//       // Set image Title to sanitized title
//       'post_title' => $my_image_title,
//       // Set image Caption (Excerpt) to sanitized title
//       'post_excerpt' => $my_image_title,
//       // Set image Description (Content) to sanitized title
//       'post_content' => $my_image_title,
//     );

//     // Set the image Alt-Text
//     update_post_meta(
//       $post_ID,
//       '_wp_attachment_image_alt',
//       $my_image_title
//     );
//     // Set the image meta (e.g. Title, Excerpt, Content)
//     wp_update_post($my_image_meta);
//   }
// }


// /* Get Image from Post Content in Specials
// -----------------------------------------------------------------------*/

function get_image_for_special($tipo, $post_id)
{
  global $post;
  $img = '';
  $size = 'thumbnail';
  switch ($tipo) {
    case 1:
      // echo get_the_post_thumbnail($post_id, 'large');
      echo get_the_post_thumbnail($post_id);
      break;
    case 2:
      // return the_post_thumbnail($post_id, 'medium');
      echo get_the_post_thumbnail($post_id, 'post-thumbnail');
      break;
    case 3:
      $tam = '440x300';
      // return the_post_thumbnail($post_id, 'medium');
      echo get_the_post_thumbnail($post_id, 'post-thumbnail');
      break;
  }
}


remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'wp_oembed_add_discovery_links');