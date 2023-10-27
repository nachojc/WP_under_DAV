<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}
global $wp;
$current_url = home_url(add_query_arg(array(),$wp->request));
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        UnderWood
 * @author         AleLeo
 * @copyright      2014 - 2014 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/underwood/header.php
 * @link           https://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
	<head profile="https://gmpg.org/xfn/11">
		
        <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" /> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="<?php bloginfo('description'); ?>" name="description" />
        <meta content="AleLeo" name="author" />
        <title><?php wp_title();  ?></title>
        <meta name="msvalidate.01" content="89A40DE8D9C94E8EAF27AEA314A4541B" />
        <meta property="fb:page_id" content="243070221414" />
        <META name="y_key" content="a5df2d53bce95f6a" />

		<link rel="profile" href="https://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/core/img/puntomira32.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/core/img/puntomira57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/core/img/puntomira72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/core/img/puntomira144.png">

        <link rel="stylesheet" href="//www.digitalavmagazine.com/wp-content/themes/underwood/core/css/bootstrap.min.css">

        <link rel="stylesheet" media="screen" type="text/css" href="//www.digitalavmagazine.com/wp-content/themes/underwood/style.min.css">

        <?php wp_head(); ?>   
	</head>

<body>
<?php include_once("core/zones/zone-INTERSTITIAL.php") ?>

<div class="social-float">
   <ul>
   	<li><a href="https://www.linkedin.com/company/digital-av-magazine" title="Accede a Linkedin" target="_blank"><span class="social linkedin">Linkedin</span></a></li>
    <li><a href="https://twitter.com/DigitalAVMag" title="Accede a Twiter" target="_blank"><span class="social twiter">Twiter</span></a></li>
    <li><a href="https://www.youtube.com/user/DigitalAVMagazine" title="Accede a YouTube" target="_blank"><span class="social youtube">YouTube</span></a></li>
    <li><a href="<?php site_url(); ?>/alta-en-newsletter"><img src="<?php bloginfo('template_directory'); ?>/core/img/newsletter.jpg" alt="Siguenos con nuestro newsletter"></a></li>
   </ul>
</div>

	<header class="row ancho">
    	<div class="ancho">
        <div class="row-publi publicidad">
        	<div class="col-xs-9 publiz1" >
            <?php include( 'core/zones/zone-MEGABANNER.php' );?>
            </div>
        	<div class="col-xs-3 publiz2 no-tablet">
            <?php include( 'core/zones/zone-Z2-BOTON-CABECERA.php' );?>
            </div>
        </div>
        <div class="mobile cabecera" style="display: none;">
            <div class="col-xs-6"><a href="<?php bloginfo('url'); ?>">
                <img class="img-responsive" src="https://www.digitalavmagazine.com/wp-content/themes/underwood/core/img/header/dos.png" alt="Ir a la portada de Digita AV Magazine"></a>
            </div>
            <div class="navbar-header pull-right mobile-only col-xs-2">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#under-menu">
                  <span class="sr-only">Portada</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
            </div>

        </div>
        <div class="row-publi no-mobile"><a href="<?php bloginfo('url'); ?>">
                <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/core/img/header/uno.jpg" alt="Ir a la portada de Digital AV Magazine"></a>
        </div>
        </a>
	</header>
    <div class="row ancho no-mobile">  
    <?php include_once('core/templates/menu.php'); ?>  
    
</div>
	<!-- end of #header -->


<div class="contentmain row ancho">
<?php
    if (is_front_page()){
        echo '<h1 style="display: none">Digital AV Magazine</h1>';
    }
    