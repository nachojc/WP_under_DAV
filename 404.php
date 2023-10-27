<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Blog Template
 *
 * @file           404.php
 * @package        Underwood
 * @author         AleLeo
 * @copyright      2014 - 2014 ThemeID
 * @license        license.txt
 * @version        Release: 1.0.0
 * @filesource     wp-content/themes/underwood/404.php
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

get_header(); ?>


<section class="main-article">
	
		<article class="full-article">
        	<div class="entry">
				<h1 class="page-title"><?php the_title(); ?></h1>
                                <p><a href="<?php site_url() ?>"><img class="aligncenter" title="error" src="<?php bloginfo('template_directory'); ?>/core/img/error404.jpg" alt="error" width="605" height="454" /></a></p>
			</div>
		</article>
	
     
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>