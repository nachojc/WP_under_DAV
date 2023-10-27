<div class="row-main separator-20">
<div id="destacados-slide" class="carousel slide" data-ride="pause">
  <ol class="carousel-indicators">
    <li data-target="#destacados-slide" data-slide-to="0" class="active"><span>Destacado</span></li>
    <li data-target="#destacados-slide" data-slide-to="1"><span>A fondo</span></li>
    <li data-target="#destacados-slide" data-slide-to="2"><span>Caso estudio</span></li>
  </ol>

<div class="carousel-inner">
    <div class="item active">
<?php 
    $the_query = new WP_Query( 'showposts=1&cat=41' );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $articulos_descartados[]=get_the_ID();
            $the_query->the_post();
            ?>
        <section class="row-main destacado hm-not">
    	    <div class="col-xs-8 slide-img">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Más informacion sobre <?php the_title_attribute(); ?>"><?=getfirstimage();?></a>
            </div>
            <div class="col-xs-4 slide-txt">
        	    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Más informacion sobre <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p><?= get_the_content_rss(15); ?></p>
            </div>
        </section>
<?php
        }
    }
    wp_reset_postdata();
?>
    
    </div>
	<div class="item">
<?php 
    $the_query = new WP_Query( 'showposts=1&cat=42' );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $articulos_descartados[]=get_the_ID();
            $the_query->the_post();
            ?>
    	<section class="row-main destacado hm-not">
            <div class="col-xs-8 slide-img">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Más informacion sobre <?php the_title_attribute(); ?>"><?=getfirstimage();?></a>
            </div>
            <div class="col-xs-4 slide-txt">
                <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Más informacion sobre <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p><?= get_the_content_rss(15); ?></p>
            </div>
        </section>
<?php
        }
    }
    wp_reset_postdata();
?>
    </div>
	<div class="item">
    <?php 
    $the_query = new WP_Query( 'showposts=1&cat=44' );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $articulos_descartados[]=get_the_ID();
            $the_query->the_post();
            ?>
        <section class="row-main destacado hm-not">
    	    <div class="col-xs-8 slide-img">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Más informacion sobre <?php the_title_attribute(); ?>"><?=getfirstimage();?></a>
            </div>
            <div class="col-xs-4 slide-txt">
                <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Más informacion sobre <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                <p><?= get_the_content_rss(15); ?></p>
            </div>
        </section>
<?php
        }
    }
    wp_reset_postdata();
?>
    </div>
</div>
</div>
</div>