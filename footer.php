<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Underwood
 * @author         Nacho
 * @copyright      2014 - 2014 AleLeo
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           https://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */


?>


</div>

<?php include_once("analyticstracking.php") ?>

<footer>
    <div class="row cinta">
        <div class="row barra-pie ancho">
            <div class="social-menu">
                <ul>
                    <li><a href="https://www.linkedin.com/company/digital-av-magazine" title="Accede a Linkedin" target="_blank"><span class="social linkedin">Linkedin</span></a></li>
                    <li><a href="https://twitter.com/DigitalAVMag" title="Accede a Twiter" target="_blank"><span class="social twiter">Twiter</span></a></li>
                    <li><a href="https://www.youtube.com/user/DigitalAVMagazine" title="Accede a YouTube" target="_blank"><span class="social youtube">YouTube</span></a></li>
                </ul>
            </div>
            <div class="linkspie">
                <a href="/politica-de-cookies/">Política de cookies</a> |
                <a href="/quienes-somos/">Quiénes somos</a> |
                <a href="/publicidad/">Publicidad</a> |
                <a href="/aviso-legal/">Aviso Legal</a> |
                <a href="/colabora-con-nosotros/">Colabora con nosotros</a> |
                <a href="/enviar-nota-de-prensa/">Enviar nota de prensa</a> |
                <a href="/contactar/">Contactar</a>
            </div>
        </div>
    </div>
    <div class="row pie ancho">
        <div class="col-xs-8 copyright">
            <p>&copy; 2023 Digital AV Magazine - <a href="https://www.underwoodcomunicacion.com/" target="_blank">Underwood Comunicación SL</a></p>
        </div>
        <div class="col-xs-4 logopie">
            <div class="pull-right"><img class="img-responsive" src="<?php echo site_url(); ?>/wp-content/themes/underwood/core/img/under-logo.jpg" alt="UnderWood Comunicación" /> </div>
        </div>
    </div>

</footer>
<div class="row">
</div>
<?php wp_footer(); ?>
<script async src="//ads11.panoramaaudiovisual.com/www/delivery/asyncjs.php"></script>
</body>

</html>