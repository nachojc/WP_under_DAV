<?php
/*
Template Name: ISE 2020 gallery
*/


 global $wpdb;
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="//www.w3.org/1999/xhtml" lang="es" dir="ltr">
<head profile="//gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="msvalidate.01" content="89A40DE8D9C94E8EAF27AEA314A4541B" />
<meta name="google-site-verification" content="yMFnikDUHlTRxIhV_mXfDAS71nvbOH459R7NG8rPuw8" />
<meta property="fb:page_id" content="243070221414" />
<meta name="y_key" content="a5df2d53bce95f6a" />

<title>Digital AV Magazine - Galeria - Especial ISE 2020</title>
<meta name="keywords" content="audiovisual, ISE, cine, new media, soluciones av, digital signage, produccion, tv corporate, tecnologia, radio, television, ISE, ISE 2020" />

<link rel="shortcut icon" href="/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="Digital AV Magazine &#8211; Especial ISE 2020 RSS Feed" href="//www.digitalavmagazine.com/tag/ise2020/feed/" />


<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="//www.digitalavmagazine.com/wp-includes/wlwmanifest.xml" /> 
<link rel='index' title='Digital AV Magazine &#8211; Especial ISE 2020' href='//www.digitalavmagazine.com/ise2020/' />

<link href="//www.digitalavmagazine.com/wp-content/themes/underwood/incspecial/css/style.css" rel="stylesheet" type="text/css">
<link href="//www.digitalavmagazine.com/wp-content/themes/underwood/core/css/press/join.min.css" rel="stylesheet" type="text/css" />
<style>
.vvqbox { display: block; max-width: 100%; visibility: visible !important; margin: 10px auto; } .vvqbox img { max-width: 100%; height: 100%; } .vvqbox object { max-width: 100%; } 
.menu-tab {float: left;width: 240px;overflow: hidden;}
iframe{width: 100%;height: 60ew;}
</style>
</head>

<body>
<?php include_once("analyticstracking.php");?>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "//www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-11258304-1");
pageTracker._trackPageview();
} catch(err) {}</script>


<div id="container">
	<div id="header" class="clearfix" style="border:0px">
		<div class="logo" style="margin-bottom: 10px;">
			<ins data-revive-zoneid="63" data-revive-id="eb661876e5a1d3ef33c346f0014b9fec"></ins>
		</div>
		<div class="menu">
            	<div id="logo" style="margin-bottom:10px;">
    <a href="//www.digitalavmagazine.com/ise2020" style="float: left;height:285px;">
                <img src="//www.digitalavmagazine.com/wp-content/themes/underwood/ise2020/img/top.jpg" alt="Digital AV Magazine &#8211; Especial ISE 2020" />
          </a></div>
          <div id="menu" style="float:left;margin-bottom:20px;">
    		<div class="menu-tab" style="float:left">
        	<a href="//www.digitalavmagazine.com/ise2020/" title="Accede al especial ISE 2020"><img src='//www.digitalavmagazine.com/wp-content/themes/underwood/ise2020/img/ise.jpg' border='0' alt='Ir a la home de ISE 2020' /></a>
    		</div>
    		<div class="menu-tab" style="float:left">
            <a href="//www.digitalavmagazine.com/galeria-ise2020/" title="Accede a la Galeria fotografica"><img src='//www.digitalavmagazine.com/wp-content/themes/underwood/ise2020/img/galeria.jpg' border='0' alt='Accede a la Galeria fotografica' /></a>
            </div>
            <div class="menu-tab" style="float:left">
            <a href="//www.digitalavmagazine.com/videos-ise2020/" title="Accede a la Galeria de Videos"><img src='//www.digitalavmagazine.com/wp-content/themes/underwood/ise2020/img/videos.jpg' border='0' alt='Accede a la Galeria fotografica' /></a>
            </div>
            <div class="menu-tab" style="float:left">
            <a href="//www.digitalavmagazine.com/"><img src='//www.digitalavmagazine.com/wp-content/themes/underwood/ise2020/img/home.jpg' border='0' alt='Volver a Digitalavmagazine.com' /></a>
            </div>
    	</div>
    </div>
</div>
	<div id="content-container" class="clearfix">
            
<?php   // Imagenes galeria ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">

    <h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Leer el resto de este artículo &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Páginas:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			</div>
		</div>
</div>
		<?php endwhile; endif; ?>




           


	
	<div id="footer">
		<ul class="footer-columns clearfix">
			<li class="column-one">
	                <p>Suplemento especial ISE 2020 Editado por DigitalAVMagazine.com</p>
<p class="copyright"> Copyright &copy; 2020 Underwood Comunicaci&oacute;n SLU. Powered by Wordpress</p>
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
                        <li><a href="//twitter.com/DigitalAVMag" class="twitter">Twitter</a></li>
					</ul>
				</div>
			</li>
			<li class="column-four">
				<div>
					<ul class="social">
                        <li><a href="//www.youtube.com/user/DigitalAVMagazine" class="youtube">YouTube</a></li>
                        <li><a href="//www.digitalavmagazine.com/tag/ise2020/feed/" class="feed" target="_blank">RSS Feed</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
</div>
<div id="template-directory" class="no_display"></div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/prototype/1.7.1.0/prototype.js?ver=1.7.1'></script>

<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-includes/js/swfobject.js?ver=2.2'></script>

<script type="text/javascript">
// <![CDATA[
    var t_jp = {"ajaxurl":"https:\/\/www.digitalavmagazine.com\/wp-admin\/admin-ajax.php","plugin_url":"https:\/\/www.digitalavmagazine.com\/wp-content\/plugins\/transposh-translation-filter-for-wordpress","lang":"es","olang":"es","prefix":"tr_","preferred":"2","msn":"1","google":"1"};
	var vvqflashvars = {}, vvqparams = { wmode: "opaque", allowfullscreen: "true", allowscriptaccess: "always" }, vvqattributes = {}, vvqexpressinstall = "https://www.digitalavmagazine.com/wp-content/plugins/vipers-video-quicktags/resources/expressinstall.swf";
        // ]]>
        </script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/plugins/transposh-translation-filter-for-wordpress/js/transposh.js?ver=0.8.1'></script>
<script type='text/javascript' src='https://www.digitalavmagazine.com/wp-content/plugins/transposh-translation-filter-for-wordpress/js/transposh.js?ver=0.8.1'></script>
<script async src="//ads11.panoramaaudiovisual.com/www/delivery/asyncjs.php"></script>

<script type="text/javascript" src="https://www.digitalavmagazine.com/wp-content/themes/underwood/core/js/custom.js"></script>



</body>
</html>