<?php

$sticky = get_option('sticky_posts');
	rsort( $sticky );
	$sticky = array_slice( $sticky, 0, $num_sticky ); // NOS DA LOS CUATRO MAS NUEVOS
	$argumentos = array(
	   'post__in' => $sticky,
	   'caller_get_posts' => 1
   );

   $query = new WP_Query($argumentos);

   if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		$img='<a href="'.get_permalink().'" rel="bookmark" title="Enlace permanente a '.get_the_title().'">'.get_the_post_thumbnail(get_the_ID(),"img_stick").'</a>';
		if (strpos($img,'logo-gris.jpg' )>0){
			$values = get_post_custom_values("leadimage");
			$img='<a href="'.get_permalink().'" rel="bookmark" title="Enlace permanente a '.get_the_title().'"><img src="'. site_url().'/wp-content/uploads/'.$values[0].'" alt="'.get_the_title().'"  title="'.get_the_title().'"></a>';
		}
		if (rand(5, 15)%2==0){
			$destacado[]='
				<section class="row-main stickers">
					<div class="col-xs-5 stick-img">'.$img.'</div>
					<div class="col-xs-7 stick-txt">
						<h4><a href="'.get_permalink().'" rel="bookmark" title="Enlace permanente a '.get_the_title().'">'.get_the_title().'</a></h4>
						<p>'.get_the_content_rss(30).'</p>
					</div>
				</section>';
		} else {
			$destacado[]='
				<section class="row-main stickers-right">
					<div class="col-xs-7 stick-txt">
						<h4><a href="'.get_permalink().'" rel="bookmark" title="Enlace permanente a '.get_the_title().'">'.get_the_title().'</a></h4>
						<p>'.get_the_content_rss(30).'</p>

					</div>
					<div class="col-xs-5 stick-img">'. $img.'</div>
				</section>';					
		}
		$articulos_descartados[]=get_the_ID();

	}
   }
   wp_reset_postdata();
