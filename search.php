<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Blog Template
 *
 * @file           search.php
 * @package        Underwood
 * @author         AleLeo
 * @copyright      2014 - 2014 ThemeID
 * @license        license.txt
 * @version        Release: 1.0.0
 * @filesource     wp-content/themes/underwood/search.php
 * @link           https://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

get_header(); ?>

<section class="main-article">
	
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">Resultados de la b&uacute;squeda "<span><?= get_search_query(); ?>"</span></h1>
			</header>


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php include(locate_template('./core/templates/home-content.php')); ?>
			<?php endwhile; ?>
<div class="row-main navigation">
    <div class="pull-left"><?php next_posts_link('&laquo; Articulos anteriores') ?></div>
    <div class="pull-right"><?php previous_posts_link('Articulos posteriores &raquo;') ?></div>
</div>


		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="page-header">
					<h1 class="page-title">Nada encontrado</h1>
				</header>

				<div class="entry-content">
					<p>Lo siento, no se ha encontrado ningún artículo con este criterio de busqueda.<br />Por favor, inténtalo de nuevo con diferentes palabras</p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</div><!-- #content -->
	
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>