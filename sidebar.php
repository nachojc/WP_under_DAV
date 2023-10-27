<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Main Widget Template
 *
 *
 * @file           sidebar.php
 * @package        UndeWood
 * @author         Nacho
 * @copyright      2014 - 2014 AleLeo
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/underwood/sidebar.php
 * @link           https://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
    
?>
    <aside class="widget-area" role="complementary">
        <section class="row-main pull-right date-widget" style="margin-bottom: 10px;padding-top: 15px;"><div class="pull-right">
            <label class="control-label" for="s"><code><?=date("d/m/Y")?></code></label>
            </div>
    	</section>
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php endif; ?>
    </aside>
    <!-- end of #widgets -->
