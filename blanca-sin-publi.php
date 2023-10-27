<?php
/*
Template Name: Blanca sin publi
*/

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Blog Template
 *
 * @file           blanca.php
 * @package        Underwood
 * @author         AleLeo
 * @copyright      2014 - 2014 ThemeID
 * @license        license.txt
 * @version        Release: 1.0.0
 * @filesource     wp-content/themes/underwood/blanca.php
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

get_header(); ?>

<section class="main-page-full">
	<?php if ( have_posts() ) : 
             while ( have_posts() ) : the_post(); ?>
		<article class="full-article">
        	<div class="entry">
            <header class="page-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
            </header>
        		<?php the_content(); ?>
			</div>
		</article>
		<?php endwhile; 
         else: ?>
        
        <?php endif; ?>
     
</section>

<?php get_footer(); ?>