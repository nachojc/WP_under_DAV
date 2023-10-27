<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Blog Template
 *
 * @file           page.php
 * @package        Underwood
 * @author         AleLeo
 * @copyright      2014 - 2014 ThemeID
 * @license        license.txt
 * @version        Release: 1.0.0
 * @filesource     wp-content/themes/underwood/page.php
 * @link           https://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

get_header(); ?>


<section class="main-article">
	<?php if ( have_posts() ) : 
			 while ( have_posts() ) : the_post(); ?>
		<div class="publicidad">
			<ins data-revive-zoneid="58" data-revive-id="eb661876e5a1d3ef33c346f0014b9fec"></ins>
		</div>
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>