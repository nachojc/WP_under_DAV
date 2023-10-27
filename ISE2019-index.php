<?php
/*
Template Name: ISE 2019 home
*/

global $wpdb;
global $query_string;

$tag_filter = 'ise2019';

$not_pp = 20;
$megadestacados = 5 ;
$destacados = 14 ;
$noticias_vistas=20;
$destacados_vistos = 0;
$id_puestos=array();



$pag = get_query_var('paged');
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
	
			echo '<img src="//www.digitalavmagazine.com/wp-content/themes/underwood/core/functions/timthumb.php?src='.$first_img.$tam." ".$cla.' />';
    }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml" lang="es" dir="ltr">
<head profile="//gmpg.org/xfn/11">

<title>Digital AV Magazine - Especial ISE 2019</title>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="Feria, audiovisual, broadcast, cine, new media, soluciones av, digital signage, produccion, tv corporate, tecnologia, radio, television, ISE,ISE 2019" />
<meta name="description" content="Tecnologias y tendencias en audiovisual, broadcast, cine y new media" />
<meta name="msvalidate.01" content="89A40DE8D9C94E8EAF27AEA314A4541B" />
<meta name="google-site-verification" content="yMFnikDUHlTRxIhV_mXfDAS71nvbOH459R7NG8rPuw8" />
<meta name="y_key" content="a5df2d53bce95f6a"  />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta property="fb:page_id" content="243070221414" />

<meta property="og:title" content="Digital AV Magazine - Especial ISE 2019">
<meta property="og:description" content="Tecnologias y tendencias en audiovisual, broadcast, cine y new media">
<meta property="og:url" content="//www.digitalavmagazine.com/ise2019">
<meta property="og:image" content="//www.digitalavmagazine.com/favicon.ico">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Digital AV Magazine">

<link rel="shortcut icon" href="/favicon.ico" />

<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="//www.digitalavmagazine.com/wp-includes/wlwmanifest.xml"> 
<link rel='index' title='Digital AV Magazine &#8211; Especial ISE 2019' href='//www.digitalavmagazine.com/ise2019/' />
<link rel="alternate" type="application/rss+xml" title="Digital AV Magazine &#8211; Especial ISE 2019 RSS Feed" href="//www.digitalavmagazine.com/tag/ise2019/feed/" />
<link rel="pingback" href="//www.digitalavmagazine.com/xmlrpc.php">



<link href="//www.digitalavmagazine.com/wp-content/themes/underwood/incspecial/css/style.css" rel="stylesheet" type="text/css">
<link href="//www.digitalavmagazine.com/wp-content/themes/underwood/core/css/press/join.min.css" rel="stylesheet" type="text/css" />


<link rel="alternate" hreflang="es" href="/ise2019/"/>
<link rel="alternate" hreflang="it" href="/it/ise2019/"/>
<link rel="alternate" hreflang="zh" href="/zh/ise2019/"/>
<link rel="alternate" hreflang="pt" href="/pt/ise2019/"/>
<link rel="alternate" hreflang="en" href="/en/ise2019/"/>
<link rel="alternate" hreflang="de" href="/de/ise2019/"/>
<link rel="alternate" hreflang="ru" href="/ru/ise2019/"/>
<link rel="alternate" hreflang="fr" href="/fr/ise2019/"/>
<link rel="alternate" hreflang="ja" href="/ja/ise2019/"/>
<link rel="alternate" hreflang="ar" href="/ar/ise2019/"/>
<link rel="alternate" hreflang="he" href="/he/ise2019/"/>



<style>
.vvqbox { display: block; max-width: 100%; visibility: visible !important; margin: 10px auto; } .vvqbox img { max-width: 100%; height: 100%; } .vvqbox object { max-width: 100%; } 
.menu-tab {float: left;width: 240px;overflow: hidden;}
iframe{width: 100%;height: 60ew;}
</style>

</head>

<body data-twttr-rendered="true" class="home blog">
    <?php include_once("analyticstracking.php"); ?>




    <div id="header-container">
        <div id="header" class="clearfix" style="border-bottom:0">
            <div class="logo" style="margin-bottom: 10px;">
                <ins data-revive-zoneid="63" data-revive-id="eb661876e5a1d3ef33c346f0014b9fec"></ins>
        	</div>
    
			<div class="menu">
              <div id="logo" style="margin-bottom:10px;">
    <a href="//www.digitalavmagazine.com/ise2019" style="float: left;">
                <img src="//www.digitalavmagazine.com/wp-content/themes/underwood/ise2019/img/top.jpg" alt="Digital AV Magazine &#8211; Especial ISE 2019" />
          </a></div>
          <div id="menu" style="float:left;margin-bottom:20px;">
        <div class="menu-tab" style="float:left">
          <a href="//www.digitalavmagazine.com/ise2019/" title="Accede al especial ISE 2019"><img src='//www.digitalavmagazine.com/wp-content/themes/underwood/ise2019/img/ise.jpg' border='0' alt='Ir a la home de ISE 2019' /></a>
        </div>
        <div class="menu-tab" style="float:left">
            <a href="//www.digitalavmagazine.com/galeria-ise2019/" title="Accede a la Galeria fotografica"><img src='//www.digitalavmagazine.com/wp-content/themes/underwood/ise2019/img/galeria.jpg' border='0' alt='Accede a la Galeria fotografica' /></a>
            </div>
            <div class="menu-tab" style="float:left">
            <a href="//www.digitalavmagazine.com/videos-ise2019/" title="Accede a la Galeria de Videos"><img src='//www.digitalavmagazine.com/wp-content/themes/underwood/ise2019/img/videos.jpg' border='0' alt='Accede a la Galeria fotografica' /></a>
            </div>
            <div class="menu-tab" style="float:left">
            <a href="//www.digitalavmagazine.com/"><img src='//www.digitalavmagazine.com/wp-content/themes/underwood/ise2019/img/home.jpg' border='0' alt='Volver a Digitalavmagazine.com' /></a>
            </div>
      </div>
    </div>
	</div><!--End Header Container -->

<div id="content-container" class="clearfix">	 
<?php 	if($pag == "" || $pag == 1){ 
$iAux=0;
$arg=array('cat'=>3149,'tag'=>$tag_filter,'posts_per_page'=>$megadestacados);
query_posts( $arg);
?>
 		<div class="slider clearfix">
	        <a href="#" class="next" id="next" style="top: 30%;">Next</a>
        	<a href="#" class="previous" style="top: 30%;">&gt;Previous</a>
        	<ul style="left: -3840px;" class="gallery-container gallery-image">
<?php   // Imagenes cabecera

while ( have_posts() ) : the_post(); 
	$destacados_vistos++;
	$id_puestos[]=get_the_ID();
	?>
    <li>
        <div class="post-image fitvid"> 
            <a href="<?php the_permalink() ?>" title="<?php the_title() ?>">
<?php get_first_image_post(1);?></a>
        </div>
    </li>
    
<?php $desAux.='';
endwhile;
 ?>
        	</ul>
            <div class="copy">
                <ul>
<?php while ( have_posts() ) : the_post();$i++;	?>
<li style="<?=($i>1)?'display: none;':'';?>">
    <h3 class="post-title" style="font-size:25pt;line-height: initial;"><a href="<?=the_permalink()?>" style="color:#9F2322;"><?=the_title()?></a></h3>
    <p style="font-size:17pt;width:960px;line-height: initial;"><?=the_content_rss('', TRUE, '', 40)?></p><p> <a href="<?= the_permalink() ?>" title="<?= the_title() ?>">Leer m&aacute;s</a></p>
</li>

<?php
endwhile;
wp_reset_query();
?>
                </ul>
            </div>
            <div id="slider-number-" class="no_display">0</div>
			<div id="slider-auto-" class="no_display">0</div>
        </div>
 
 <div class="publicidad">
    <ins data-revive-zoneid="63" data-revive-id="eb661876e5a1d3ef33c346f0014b9fec"></ins>
     <BR />&nbsp;

</div>
 
 
 
 <?php
 // Destacados
       $arg=array('cat'=>3148,'tag'=>$tag_filter,'posts_per_page'=>$destacados,'post__not_in'=>$id_puestos);
 query_posts( $arg);
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
        <ins data-revive-zoneid="61" data-revive-id="eb661876e5a1d3ef33c346f0014b9fec"></ins>
        <ins data-revive-zoneid="60" data-revive-id="eb661876e5a1d3ef33c346f0014b9fec"></ins>
    </li>
</ul>

<?php } else {
    query_posts( 'cat=3149&tag='.$tag_filter.'&posts_per_page='.$megadestacados);
		while ( have_posts() ) : the_post();$id_puestos[]=get_the_ID();endwhile;
    query_posts( 'cat=3148&tag='.$tag_filter.'&posts_per_page='.$destacados);
		while ( have_posts() ) : the_post();$id_puestos[]=get_the_ID();endwhile;
}?>

<?php
// verticales
    $argumentos = array(
                'tag'=>$tag_filter,
                'post__not_in' => $id_puestos,
                'caller_get_posts' => 1,
                'paged'=>$pag,
                'orderby'=>'date',
                'order'=>'DESC',
                'posts_per_page'=>$noticias_vistas
        );
        $args = array_merge(  $argumentos );
        query_posts($args  );

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
    <ins data-revive-zoneid="62" data-revive-id="eb661876e5a1d3ef33c346f0014b9fec"></ins>
<BR />&nbsp;

</div>
                    
<?php					break;}
				case 3: { 
					//echo "2 publis";
					?>
<ul>                    
    <li>
    <ins data-revive-zoneid="61" data-revive-id="eb661876e5a1d3ef33c346f0014b9fec"></ins>
    <ins data-revive-zoneid="60" data-revive-id="eb661876e5a1d3ef33c346f0014b9fec"></ins>
    <BR />&nbsp;
    </li>          
</ul>                     
<?php					break;}
			};
			$iPubli ++;
		};
		echo '<ul class="post-list clearfix" style="background:" >';
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
?>
	<div class="navigation">
            <?php
            $count_posts = $wp_query->found_posts;//die(var_dump($wp_query));
            if  (($pag)*$noticias_vistas < $count_posts){?>
        	<div class="alignleft"><a href="//www.digitalavmagazine.com/ise2019/page/<?php echo $pag+1; ?>">  &laquo; Art&iacute;culos anteriores</a></div>
            <?php } ?>
    <?php  if($pag == "" || $pag == 1){ ?>

    <?php  } else { ?>
        	<div class="alignright"><a href="//www.digitalavmagazine.com/ise2019/page/<?php echo $pag-1; ?>">Art&iacute;culos siguientes &raquo</a></div>
    <?php  } ;
    wp_reset_query();
    ?>
     	</div>

	<div id="footer">
		<ul class="footer-columns clearfix">
			<li class="column-one">
	                <p>Suplemento especial ISE 2019 Editado por PanoramaAudiovisual.com</p>
<p class="copyright"> Copyright &copy; 2019 Underwood Comunicaci&oacute;n SLU. Powered by Wordpress</p>
			</li>
			<li class="column-two">
				<div>
					<h2>Social Links</h2>
					<ul class="social">
                    	<li><a href="//twitter.com/panoramaav" class="twitter">Twitter</a></li>					</ul>
				</div>
			</li>
			<li class="column-three">            
				<div>
					<ul class="social">
                        <li><a href="//www.facebook.com/pages/Panorama-Audiovisual/243070221414" class="facebook">Facebook</a></li>
						<li><a href="//www.linkedin.com/groups?gid=2431701&mostPopular=" class="linked-in">LinkedIn</a></li>
					</ul>
				</div>
			</li>
			<li class="column-four">
				<div>
					<ul class="social">
                        <li><a href="//www.youtube.com/user/PanoramaAudiovisual" class="youtube">YouTube</a></li>
                        <li><a href="//www.digitalavmagazine.com/tag/ise2019/feed/" class="feed" target="_blank">RSS Feed</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
</div>
</div>
        
   	
<script type="text/javascript">
// <![CDATA[
    var t_jp = {"ajaxurl":"https:\/\/www.digitalavmagazine.com\/wp-admin\/admin-ajax.php","plugin_url":"https:\/\/www.digitalavmagazine.com\/wp-content\/plugins\/transposh-translation-filter-for-wordpress","lang":"es","olang":"es","prefix":"tr_","preferred":"2","msn":"1","google":"1"};
	var vvqflashvars = {}, vvqparams = { wmode: "opaque", allowfullscreen: "true", allowscriptaccess: "always" }, vvqattributes = {}, vvqexpressinstall = "https://www.digitalavmagazine.com/wp-content/plugins/vipers-video-quicktags/resources/expressinstall.swf";
// ]]>
</script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="https://www.digitalavmagazine.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1"></script>
<script type="text/javascript">
    jQuery.browser = {};
    (function () {
        jQuery.browser.msie = false;
        jQuery.browser.version = 0;
        if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
            jQuery.browser.msie = true;
            jQuery.browser.version = RegExp.$1;
        }
    })();
</script>
<script type="text/javascript" src="https://www.digitalavmagazine.com/wp-content/themes/underwood/incspecial/scripts/jquery.lightbox-0.5.js?ver=3.6"></script>
<script type="text/javascript" src="https://www.digitalavmagazine.com/wp-content/themes/underwood/incspecial/scripts/press-two_jquery.js?ver=3.6"></script>

<script type="text/javascript">

    var myVar;
    var btnNext= document.getElementById("next");
        function gonext(){
            //clearInterval(myVar);
            btnNext.click();
            myVar=setTimeout(function(){gonext()},7000);        
            }
        
        myVar=setTimeout(function(){gonext()},7000);

</script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/plugins/transposh-translation-filter-for-wordpress/js/transposh.js?ver=0.8.1'></script>
<script async src="//ads11.panoramaaudiovisual.com/www/delivery/asyncjs.php"></script>

</body>
</html>