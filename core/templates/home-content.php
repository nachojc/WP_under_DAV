<?php  

$imgPie = get_post_custom_values("featuredarticleimage"); ?>


<article class="col-sm-6 hm-article" id="post-<?php echo get_the_ID(); ?>">
    <div class="in-article">
    <div class="hm-article-img">
    
    <?php if (($imgPie[0] != "") AND isset($imgPie[0])) : ?>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace permanente a <?php the_title(); ?>">
            <img src="<?php bloginfo('url'); ?>/wp-content/uploads/<?php echo $imgPie[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/></a>
      <?php endif; ?>
    
    </div>
    <a href="<?php the_permalink(); ?>" rel="bookmark">
        <div class="hm-article-txt">
    <h3 class="title"><?php the_title(); ?><br /><?php  if (is_category() || is_tag()) echo '<small style="font-size: 85%;float: right;">'.get_the_date()."</small>"?><br /></h3>
    <!-- <h3 class="arrow">[+]</h3> -->
    <div class="article-content"> <p><?php the_content_rss('', TRUE, '', 30); ?></p></div>
    </div>
    </a>
    
    </div>
</article>
