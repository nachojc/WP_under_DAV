<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
  exit;
}

/**
 * Blog Template
 *
 * @file           archive.php
 * @package        Underwood
 * @author         AleLeo
 * @copyright      2014 - 2014 ThemeID
 * @license        license.txt
 * @version        Release: 1.0.0
 * @filesource     wp-content/themes/underwood/archive.php
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */

get_header(); ?>

<section class="main-article">
  <div id="content" role="main">
    <?php if (have_posts()) { ?>
      <header class="page-header">
        <h1 class="page-title">
          <?php
          switch ($true) {
            case is_category():
              ucfirst(single_cat_title());
              break;
            case is_tag():
              echo "Artículos sobre &#8216;";
              single_tag_title();
              echo "&#8217;";
              break;
            case is_day():
              echo "Hemeroteca del día: ";
              the_time('j F Y');
              break;
            case is_month():
              echo "Hemeroteca del Mes: ";
              the_time('F Y');
              break;
            case is_year():
              echo "Hemeroteca del Año: ";
              the_time('Y');
              break;
            case is_author():
              echo " Hemeroteca del Autor: " . get_the_author();
              break;
            case (isset($_GET['paged']) && !empty($_GET['paged'])):
              echo "Hemeroteca";
              break;
          }

          ?></h1>
      </header>

      <?php /* Start the Loop */ ?>
      <?php
      while (have_posts()) {
        the_post();
        include(locate_template('./core/templates/home-content.php'));
      }
      ?>


      <div class="row-main navigation">
        <div class="pull-left"><?php next_posts_link('&laquo; Articulos anteriores') ?></div>
        <div class="pull-right"><?php previous_posts_link('Articulos posteriores &raquo;') ?></div>
      </div>

    <?php
    } else {
    ?>

      <article id="post-0" class="post no-results not-found">
        <header class="page-header">
          <h1 class="page-title">Nada encontrado</h1>
        </header>

        <div class="entry-content">
          <p>Lo siento, no se ha encontrado ningun articulo con este criterio.<br />Por favor intentalo de nuevo con diferentes palabras</p>
          <?php get_search_form(); ?>
        </div>
      </article>


    <?php } ?>
  </div>
</section>
<?php
get_sidebar();
get_footer(); ?>