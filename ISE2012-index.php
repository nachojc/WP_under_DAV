<?php
/*
Template Name: ISE 2012 home
*/

global $wpdb;
global $query_string;

$tag_filter = '';

$not_pp = 20;
$megadestacados = 5 ;
$destacados = 8 ;
$destacados_vistos = 0;
$pag = get_query_var('paged');//$_GET['pag'];
if($pag == "" || $pag == 1){
	$pag = 1;
} 
$offset = ($pag-1)*$not_pp;




function get_first_image_post($tipo) {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output =preg_match_all( '/<img.+src=[\'"]([^\'"]+)[\'"].*>/i',$post->post_content, $matches);
	$first_img = $matches [1][0];

	if ($tipo ==1) {
		$tam = '&amp;w=960&amp;h=360&amp;zc=1';
		$cla = ' class="attachment-960x2000" ';
		 }
	if ($tipo ==2) {
		$tam = '&amp;w=240&amp;h=&amp;zc=1';
		$cla = ' class="attachment-240x2000"';
		 }			
	if ($tipo ==3) {
		$tam = '&amp;w=440&amp;h=300&amp;zc=1';
		$cla = ' class="attachment-440x300" ';
		 }
	
			echo '<img src="https://www.digitalavmagazine.com/wp-content/themes/PanaromaAudiovisual/inc/xtras/timthumb.php?src='.$first_img.$tam.'" '.$cla.' />';
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" lang="es" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Digital AV Magazine - Especial ISE 2012</title>
<meta name="keywords" content="audiovisual, broadcast, cine, new media, soluciones av, digital signage, produccion, tv corporate, tecnologia, radio, television, ISE, ISE 2012" />
<meta name="description" content="Tecnologias y tendencias en  soluciones av, digital signage e ISE" />
<link href="https://www.digitalavmagazine.com/wp-content/themes/press/style.css" rel="stylesheet" type="text/css" />
<link href="https://www.digitalavmagazine.com/wp-content/themes/press/color-styles/white-maroon/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://www.digitalavmagazine.com/wp-content/themes/press/jquery.lightbox-0.5.css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="Digital AV Magazine RSS Feed" href="https://www.digitalavmagazine.com/es/feed/" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="Digital AV Magazine RSS Feed" href="https://www.digitalavmagazine.com/es/ise2012/feed/" />


<link rel='stylesheet' id='NextGEN-css'  href='https://www.digitalavmagazine.com/wp-content/plugins/nextgen-gallery/css/nggallery.css?ver=1.0.0' type='text/css' media='screen' />
<link rel='stylesheet' id='shutter-css'  href='https://www.digitalavmagazine.com/wp-content/plugins/nextgen-gallery/shutter/shutter-reloaded.css?ver=1.3.4' type='text/css' media='screen' />
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-includes/js/jquery/jquery.js?ver=1.7.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ThemeAjax = {"ajaxurl":"https:\/\/www.digitalavmagazine.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/themes/press/ocmx/includes/upgrade.js?ver=3.3.1'></script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/themes/press/scripts/ajaxupload.js?ver=3.3.1'></script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/themes/press/scripts/superfish.js?ver=3.3.1'></script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/themes/press/scripts/hoverIntent.js?ver=3.3.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ThemeAjax = {"ajaxurl":"https:\/\/www.digitalavmagazine.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/themes/press/scripts/ocmx_jquery.js?ver=3.3.1'></script>

<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/themes/press/scripts/multifile.js?ver=3.3.1'></script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/themes/press/scripts/jquery.lightbox-0.5.js?ver=3.3.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ThemeAjax = {"ajaxurl":"https:\/\/www.digitalavmagazine.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/themes/press/scripts/press_jquery.js?ver=3.3.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var shutterSettings = {"msgLoading":"L O A D I N G","msgClose":"Click to Close","imageCount":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/plugins/nextgen-gallery/shutter/shutter-reloaded.js?ver=1.3.3'></script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/plugins/nextgen-gallery/js/jquery.cycle.all.min.js?ver=2.9995'></script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/plugins/nextgen-gallery/js/ngg.slideshow.min.js?ver=1.05'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var t_jp = {"ajaxurl":"https:\/\/www.digitalavmagazine.com\/wp-admin\/admin-ajax.php","plugin_url":"https:\/\/www.digitalavmagazine.com\/wp-content\/plugins\/transposh-translation-filter-for-wordpress","lang":"es","olang":"es","prefix":"tr_","preferred":"1","msn":"1"};
/* ]]> */

</script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/plugins/transposh-translation-filter-for-wordpress/js/transposh.js?ver=0.8.1'></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.digitalavmagazine.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.digitalavmagazine.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 3.3.1" />
<!-- <meta name="NextGEN" version="1.9.2" /> -->
<link rel="alternate" hreflang="it" href="/it/"/><link rel="alternate" hreflang="zh" href="/zh/"/><link rel="alternate" hreflang="en" href="/en/"/><link rel="alternate" hreflang="de" href="/de/"/><link rel="alternate" hreflang="ru" href="/ru/"/><link rel="alternate" hreflang="fr" href="/fr/"/><link rel="alternate" hreflang="ja" href="/ja/"/><link rel="alternate" hreflang="ar" href="/ar/"/><link rel="alternate" hreflang="nl" href="/nl/"/><link rel="alternate" hreflang="sv" href="/sv/"/><link rel="alternate" hreflang="he" href="/he/"/>
<meta name="translation-stats" content='{"total_phrases":null,"translated_phrases":null,"human_translated_phrases":null,"hidden_phrases":null,"hidden_translated_phrases":null,"hidden_translateable_phrases":null,"meta_phrases":null,"meta_translated_phrases":null,"time":"0.106"}'/></head>
<body>
<?php include_once("analyticstracking.php"); ?>
<div id="container">
	<div id="header" class="clearfix">
<div class="logo">
            	<!--/* OpenX Javascript Tag v2.8.7 */-->

<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://ads11.panoramaaudiovisual.com//www/delivery/ajs.php':'https://ads11.panoramaaudiovisual.com//www/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=63");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='https://ads11.panoramaaudiovisual.com//www/delivery/ck.php?n=a59045e6&amp;cb=<?php //put_random();?>' target='_blank'><img src='https://ads11.panoramaaudiovisual.com//www/delivery/avw.php?zoneid=63&amp;cb=<?php //put_random();?>&amp;n=a59045e6' border='0' alt='' /></a></noscript>
        </div>
		<div class="menu">
<p><br />
            <a href="https://www.digitalavmagazine.com/ise2012/" class="logo">
            <img src="https://www.digitalavmagazine.com/wp-content/themes/PanaromaAudiovisual/ISE2012/img/top.jpg" alt="Digital AV Magazine &#8211; Especial ISE 2012" />
      </a></p>                       
<p>                            
<table border="0" cellpadding="0" cellspacing="0"><tr>
<td><a href="https://www.digitalavmagazine.com/ise2012/" title="Accede al especial ISE 2012"><img src='https://www.digitalavmagazine.com/wp-content/themes/PanaromaAudiovisual/ISE2012/img/ise2012.jpg' border='0' alt='Ir a la home de ISE 2012' /></a><br /></td>	<td><a href="https://www.digitalavmagazine.com/galeria-ise2012/" title="Accede a la Galeria fotografica"><img src='https://www.digitalavmagazine.com/wp-content/themes/PanaromaAudiovisual/ISE2012/img/galeria.jpg' border='0' alt='Accede a la Galeria fotografica'  /></a>
<br /></td>
<td><a href="https://www.digitalavmagazine.com/"><img src='https://www.digitalavmagazine.com/wp-content/themes/PanaromaAudiovisual/ISE2012/img/home.jpg' border='0' alt='Volver a digitalavmagazine.com' /></a><br /></td></tr></table>
</p>        
</div>
</div>


	<div id="content-container" class="clearfix">     
<?php 	if($pag == "" || $pag == 1){ ?>

       <div class="feature-post">
            <a href="#" class="scroller-left" id="scroller-left-btn">Previous</a>
            <a href="#" class="scroller-right" id="scroller-right-btn">Next</a>
			<div class="feature-post-image">

<?php   // Imagenes cabecera
				$iAux=0;
				query_posts( 'cat=3149&tag="ise2012"&posts_per_page='.$megadestacados);
				
				while ( have_posts() ) : the_post(); $iAux++;
					$destacados_vistos++;
					$id_puestos[]=get_the_ID();
					if ($iAux==1){ $sClass= 'floatleft';} else {$sClass='no_display';};?>
					<div class="<?php echo $sClass ?>" id="image-slide-<?php the_ID() ?>">
						<a href="<?php the_permalink() ?>" title="<?php the_title() ?>" class="floatleft"><?php get_first_image_post(1);?></a>     
					</div>
				
				<?php
				endwhile;
				wp_reset_query(); ?>  
            </div>

<?php
$iAux=0;
query_posts( 'cat=3149&tag="ise2012"&posts_per_page='.$megadestacados);
while ( have_posts() ) : the_post(); $iAux++;

 if ($iAux==1){ $sClass= 'feature-post-content';} else {$sClass='no_display';};?>
	    <div class="<?php echo $sClass ?>" id="post-slide-<?php the_ID() ?>">
                    <h1><a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?></a></h1>
                     <h3><?php the_content_rss('', TRUE, '', 40); ?></h3>
				<p> <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">Leer m&aacute;s</a></p>
                    
              </div>
<?php	
endwhile;
wp_reset_query();
 ?>			


            	        <div class="no_display" id="feature-auto-slide">0</div>
        </div>
        
        
        
        
        
        
        
        









<?php
// Destacados
	
query_posts( 'cat=3148&tag="ise2012"&posts_per_page='.$destacados);//&post__not_in='.$id_puestos);
$iAux=0;
while ( have_posts() ) : the_post();
	$id_puestos[]=get_the_ID();
	$iEntradas++;
	$destacados_vistos++;
	if($iAux==0) { echo '<ul class="sub-post-list clearfix">';} 
	?>
		<li>
            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>"><?php get_first_image_post(3); ?></a>
			<div class="copy">
                <h3 ><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" style="font-style:normal;"><?php the_title() ?></a></h3>
                <h3 style="line-height: normal; font-size:16px;"><?php the_content_rss('', TRUE, '', 40); ?></h3>
    <p>  <a href="<?php the_permalink() ?>" class="action-link">Leer m&aacute;s</a></p>
               
		  </div>
		</li>
                
<?php	$iAux++;

		if($iAux==2) { echo "</ul>"; $iAux=0;}
	endwhile;
	if($iAux!=0) { echo "<li><div class='copy'> </div> </li></ul>";}
	wp_reset_query();
        
?>

<ul>
	<li>
    	<!--/* OpenX Javascript Tag v2.8.7 */-->

		<script type='text/javascript'><!--//<![CDATA[
           var m3_u = (location.protocol=='https:'?'https://ads11.panoramaaudiovisual.com//www/delivery/ajs.php':'https://ads11.panoramaaudiovisual.com//www/delivery/ajs.php');
           var m3_r = Math.floor(Math.random()*99999999999);
           if (!document.MAX_used) document.MAX_used = ',';
           document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
           document.write ("?zoneid=61");
           document.write ('&amp;cb=' + m3_r);
           if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
           document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
           document.write ("&amp;loc=" + escape(window.location));
           if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
           if (document.context) document.write ("&context=" + escape(document.context));
           if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
           document.write ("'><\/scr"+"ipt>");
        //]]>--></script><noscript><a href='https://ads11.panoramaaudiovisual.com//www/delivery/ck.php?n=ab42053f&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='https://ads11.panoramaaudiovisual.com//www/delivery/avw.php?zoneid=61&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=ab42053f' border='0' alt='' /></a></noscript>

   
    	<!--/* OpenX Javascript Tag v2.8.7 */-->

		<script type='text/javascript'><!--//<![CDATA[
           var m3_u = (location.protocol=='https:'?'https://ads11.panoramaaudiovisual.com//www/delivery/ajs.php':'https://ads11.panoramaaudiovisual.com//www/delivery/ajs.php');
           var m3_r = Math.floor(Math.random()*99999999999);
           if (!document.MAX_used) document.MAX_used = ',';
           document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
           document.write ("?zoneid=60");
           document.write ('&amp;cb=' + m3_r);
           if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
           document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
           document.write ("&amp;loc=" + escape(window.location));
           if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
           if (document.context) document.write ("&context=" + escape(document.context));
           if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
           document.write ("'><\/scr"+"ipt>");
        //]]>--></script><noscript><a href='https://ads11.panoramaaudiovisual.com//www/delivery/ck.php?n=a2f17973&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='https://ads11.panoramaaudiovisual.com//www/delivery/avw.php?zoneid=60&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a2f17973' border='0' alt='' /></a></noscript>

    </li>
</ul>    

<?php } ?>

<?php
// verticales

if($pag == "" || $pag == 1){ 
	$not_pp+=$megadestacados+$destacados+2;
	query_posts( 'tag="ise2012"&posts_per_page='.$not_pp.'&offset='.$offset);//&posts_per_page=100');&post__not_in='.$id_puestos);

  } else { 
	$offset+=$megadestacados+$destacados+2;
	query_posts( 'tag="ise2012"&posts_per_page='.$not_pp.'&offset='.$offset);//&posts_per_page=100');&post__not_in='.$id_puestos);
  } 
  
$iAux=0;
$iPubli=0;
while ( have_posts() ) : the_post(); 
	$iExit=0;
	foreach ($id_puestos as $i) {
		if ($i==get_the_ID()) {
			$iExit=1;
			break;}
	}
	if ($iExit==1){continue;;}
	if($iAux==0) { 
		if  ($pag != "" && $pag != 1){
			switch($iPubli) {
				case 1: {
					//echo "publi grande"; ?>
<div class="publicidad">
        <?php  //include (get_bloginfo('template_url')."/publi/PAV-id-37.php"); ?>
        <!--/* OpenX Javascript Tag v2.8.7 */-->
	
<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://ads11.panoramaaudiovisual.com//www/delivery/ajs.php':'https://ads11.panoramaaudiovisual.com//www/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=62");
   document.write ('&amp;cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
   document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
   document.write ("&amp;loc=" + escape(window.location));
   if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='https://ads11.panoramaaudiovisual.com//www/delivery/ck.php?n=aaedfbe9&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='https://ads11.panoramaaudiovisual.com//www/delivery/avw.php?zoneid=62&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=aaedfbe9' border='0' alt='' /></a></noscript>

<BR />&nbsp;

</div>
                    
<?php					break;}
				case 3: { 
					//echo "2 publis";
					?>
<ul>                    
        	<!--/* OpenX Javascript Tag v2.8.7 */-->

		<script type='text/javascript'><!--//<![CDATA[
           var m3_u = (location.protocol=='https:'?'https://ads11.panoramaaudiovisual.com//www/delivery/ajs.php':'https://ads11.panoramaaudiovisual.com//www/delivery/ajs.php');
           var m3_r = Math.floor(Math.random()*99999999999);
           if (!document.MAX_used) document.MAX_used = ',';
           document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
           document.write ("?zoneid=61");
           document.write ('&amp;cb=' + m3_r);
           if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
           document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
           document.write ("&amp;loc=" + escape(window.location));
           if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
           if (document.context) document.write ("&context=" + escape(document.context));
           if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
           document.write ("'><\/scr"+"ipt>");
        //]]>--></script><noscript><a href='https://ads11.panoramaaudiovisual.com//www/delivery/ck.php?n=ab42053f&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='https://ads11.panoramaaudiovisual.com//www/delivery/avw.php?zoneid=61&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=ab42053f' border='0' alt='' /></a></noscript>

   
    	<!--/* OpenX Javascript Tag v2.8.7 */-->

		<script type='text/javascript'><!--//<![CDATA[
           var m3_u = (location.protocol=='https:'?'https://ads11.panoramaaudiovisual.com//www/delivery/ajs.php':'https://ads11.panoramaaudiovisual.com//www/delivery/ajs.php');
           var m3_r = Math.floor(Math.random()*99999999999);
           if (!document.MAX_used) document.MAX_used = ',';
           document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
           document.write ("?zoneid=60");
           document.write ('&amp;cb=' + m3_r);
           if (document.MAX_used != ',') document.write ("&amp;exclude=" + document.MAX_used);
           document.write (document.charset ? '&amp;charset='+document.charset : (document.characterSet ? '&amp;charset='+document.characterSet : ''));
           document.write ("&amp;loc=" + escape(window.location));
           if (document.referrer) document.write ("&amp;referer=" + escape(document.referrer));
           if (document.context) document.write ("&context=" + escape(document.context));
           if (document.mmm_fo) document.write ("&amp;mmm_fo=1");
           document.write ("'><\/scr"+"ipt>");
        //]]>--></script><noscript><a href='https://ads11.panoramaaudiovisual.com//www/delivery/ck.php?n=a2f17973&amp;cb=INSERT_RANDOM_NUMBER_HERE' target='_blank'><img src='https://ads11.panoramaaudiovisual.com//www/delivery/avw.php?zoneid=60&amp;cb=INSERT_RANDOM_NUMBER_HERE&amp;n=a2f17973' border='0' alt='' /></a></noscript>              
                    
<BR />&nbsp;
</ul>                    
<?php					break;}
			};
			$iPubli ++;
		};
		echo '<ul class="post-list clearfix">';
	}
	//ponemos cada vertical

?>
		<li>               
			<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php get_first_image_post(2); ?></a>
                                        <div class="copy">
                        <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                         <h3 style="line-height: normal; font-size:16px;"><?php the_content_rss('', TRUE, '', 30); ?></h3>
						<p> <a href="<?php the_permalink() ?>" class="action-link">Leer m&aacute;s</a></p>
                        
          </div>
    </li>
 
<?php	
	$iAux ++; 
	if($iAux==4) { echo "</ul>"; $iAux=0;}
endwhile;
	if($iAux!=0 ) { 
		for ($iAux;$iAux<4; $iAux++){ echo '<li><div class="copy"></div></li>';}
		echo "</ul>";
	}

wp_reset_query();
        
?>
	</div>
        
   	<div class="navigation">
    	<div class="alignleft"><a href="https://www.digitalavmagazine.com/ise2012/page/<?php echo $pag+1; ?>">  &laquo; Art&iacute;culos anteriores</a></div>

<?php  if($pag == "" || $pag == 1){ ?>

<?php  } else { ?>
    	<div class="alignright"><a href="https://www.digitalavmagazine.com/ise2012/page/<?php echo $pag-1; ?>">Art&iacute;culos siguientes &raquo</a></div>
<?php  } ?>
 	</div>   

	<div id="footer">
		<ul class="footer-columns clearfix">
			<li class="column-one">
	                <p>Suplemento especial ISE 2012 Editado por DigitalAVMagazine.com</p>
<p class="copyright"> Copyright &copy; 2012 Underwood Comunicaci&oacute;n SLU. Powered by Wordpress</p>
			</li>
			<li class="column-two">
				<div>
					<h2>Social Links</h2>
					<ul class="social">
                    						</ul>
				</div>
			</li>
			<li class="column-three">            
				<div>
					<ul class="social">
						<li><a href="https://www.linkedin.com/company/digital-av-magazine" class="linkedin">Linkedin</a></li>
                        <li><a href="https://twitter.com/DigitalAVMag" class="twitter">Twitter</a></li>
					</ul>
				</div>
			</li>
			<li class="column-four">
				<div>
					<ul class="social">
                        <li><a href="https://www.youtube.com/user/DigitalAVMagazine" class="youtube">YouTube</a></li>
                        <li><a href="https://www.digitalavmagazine.com/tag/ise2012/feed/" class="feed" target="_blank">RSS Feed</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
</div>
<div id="template-directory" class="no_display">https://www.digitalavmagazine.com/wp-content/themes/press</div>

<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-includes/js/jquery/ui/jquery.ui.core.min.js?ver=1.8.16'></script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-includes/js/jquery/ui/jquery.ui.widget.min.js?ver=1.8.16'></script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-includes/js/jquery/ui/jquery.ui.mouse.min.js?ver=1.8.16'></script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-includes/js/jquery/ui/jquery.ui.draggable.min.js?ver=1.8.16'></script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-includes/js/jquery/ui/jquery.ui.droppable.min.js?ver=1.8.16'></script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-includes/js/jquery/ui/jquery.ui.sortable.min.js?ver=1.8.16'></script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-includes/js/jquery/ui/jquery.ui.tabs.min.js?ver=1.8.16'></script>
<script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>
<script type="text/javascript">
	(function() {
	var s = document.createElement('SCRIPT'), s1 = document.getElementsByTagName('SCRIPT')[0];
	s.type = 'text/javascript';
	s.async = true;
	s.src = 'https://widgets.digg.com/buttons.js';
	s1.parentNode.insertBefore(s, s1);
	})();

</script>

</body>
</html>