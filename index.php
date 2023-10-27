<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Blog Template
 *
 * @file           index.php
 * @package        Underwood
 * @author         AleLeo
 * @copyright      2014 - 2020 ThemeID
 * @license        license.txt
 * @version        Release: 1.0.0
 * @filesource     wp-content/themes/underwood/index.php
 * @link           https://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

get_header();
$num_articulos=29;
$num_sticky=4;

?>
<div class="main">
<?php 
	$destacado = array();
	$articulos_descartados = array();
	
	// include('core/templates/home-slide.php');

    


	$iArticle=0;$iStickPos=0;
	if ( have_posts() ) { 
		$the_query = new WP_Query( 'showposts=1&cat=41' );
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$articulos_descartados[] = get_the_ID();
			?>
			<section class="row-main destacado hm-not separator-20" id="post-<?php echo get_the_ID(); ?>">
				<div class="col-xs-8 slide-img">
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="Más informacion sobre <?php the_title_attribute(); ?>"><?=getfirstimage();?></a>
				</div>
				<div class="col-xs-4 slide-txt">
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Más informacion sobre <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					<p><?= get_the_content_rss(20); ?></p>
				</div>
			</section>
			<?php
			}
		}
		wp_reset_postdata();
		include(locate_template('./core/templates/home-stickys.php')); 
		
		$pag = explode("=", $query_string);

		$argumentos = array(
			'post__not_in' => array($articulos_descartados),
			'caller_get_posts' => 1,
			'paged'=>$pag[1],
			'posts_per_page' => $num_articulos,
			'orderby'=>'date',
			'order'=>'DESC'
			// 'showposts' => $num_articulos
		);

		// $args  = array(
		// 	'post_type'      => 'post',
		// 	'posts_per_page' => 1,
		// 	'post__not_in'   => array($articulos_descartados),
		// 	'orderby'        => 'date',
		// 	'order'          => 'DESC',
		// 	'post_status'    => 'publish',
		// 	'showposts' => $num_articulos
		// );


		// $the_query = new WP_Query(   $argumentos );
		$the_query = new WP_Query(   $argumentos );
		$descrt = $articulos_descartados;
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post(); 
				if (!in_array( get_the_ID(),$descrt)){
					switch ($iArticle) {
						case 4:
							echo '<section class="row-main"><div class="col-xs-12">';
							get_template_part( './core/zones/zone-Z6-ROBAPAGINAS-PORTADA-SUPERIOR' );
							echo '</div></section>';
							break;
						case 4:
							echo '<section class="row-main"><div class="col-xs-12">';
							get_template_part( './core/zones/zone-Z6-ROBAPAGINAS-PORTADA-INFERIOR' );
							echo '</div></section>';
							break;
					}

					if ($iArticle==4 || $iArticle==8 || $iArticle==14 || $iArticle==20){
						echo $destacado[$iStickPos];$iStickPos++;
					}
					$iArticle++;
					include(locate_template('./core/templates/home-content.php'));
				}
			} 
		}
		wp_reset_postdata();
	} 
?>

<div class="row-main navigation separator-20">
    <div class="pull-left"><?php next_posts_link('&laquo; Art&iacute;culos anteriores') ?></div>
    <div class="pull-right"><?php previous_posts_link('Pr&oacute;ximos art&iacute;culos &raquo;') ?></div>
  </div>        
        
	</div>
	<!-- end of #content-blog -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>