<div class="row-main separator-20">
<div id="destacados-slide" class="carousel slide" data-ride="pause">
<div class="carousel-inner">
    <div class="item active">
<?php 
    $the_query = new WP_Query( 'showposts=1&cat=41' );
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $articulos_descartados[]=get_the_ID();
            $the_query->the_post();
            ?>
        <section class="row-main destacado hm-not" id="post-<?php echo get_the_ID(); ?>">
    	    <div class="col-xs-8 slide-img">
                <a href="<?php the_permalink(); ?>" rel="bookmark" title="Más informacion sobre <?php the_title_attribute(); ?>"><?=getfirstimage();?></a>
            </div>
            <div class="col-xs-4 slide-txt">
        	    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Más informacion sobre <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p><?php 
                //echo get_the_content_rss(15); 
                echo get_the_excerpt(); 
                ?></p>
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