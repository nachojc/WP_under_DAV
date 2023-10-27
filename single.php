<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Blog Template
 *
 * @file           single.php
 * @package        Underwood
 * @author         AleLeo
 * @copyright      2014 - 2014 ThemeID
 * @license        license.txt
 * @version        Release: 1.0.0
 * @filesource     wp-content/themes/underwood/single.php
 * @link           https://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

get_header(); ?>

<section class="main-article">
	<?php if ( have_posts() ) : 
             while ( have_posts() ) : the_post(); ?>
		<article class="full-article" >
        	<div class="entry" id="post-<?php the_ID(); ?>">
                    <?=insertarPubliSuperior()?>
            <header class="page-header">
				<h1 class="page-title"><?php the_title(); ?></h1>
            </header>
        		<?php the_content();?>
                <?php if ( function_exists('the_tags') ) {echo '<strong>';
					the_tags('Otros art&iacute;culos sobre ', ', ', '');echo '</strong>'; } ?>
			<br /><div style="margin-top:5px;"><small>Por
			<?php the_author_posts_link('namefl'); ?>
			&bull;
			<?php the_time('j M, Y') ?>
		<BR /><?php if (function_exists('todays_overall_count')) { todays_overall_count($post->ID, 'Visited', 'times', 'so far today', '0', 'noshow'); } ?>
			&bull; Secci&oacute;n:
			<?php the_category(', ') ?>
			</small></div>
                <?php if (function_exists('wp_related_posts')){
                wp_related_posts();
                }
                ?>
			</div>
		</article>
		<?php endwhile; 
         else: ?>
        
        <?php endif; ?>
     
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>