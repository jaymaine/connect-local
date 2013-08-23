<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-footer-center.php
 * @package        Responsive 
 * @author         Ulrich Pogson 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive-child-theme/sidebar-footer-center.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
	<?php responsive_widgets(); // above widgets hook ?>
            
		<?php if (!dynamic_sidebar('footer-center')) : ?>

			<a href="#scroll-top" title="<?php esc_attr_e( 'scroll to top', 'responsive' ); ?>"><?php _e( '&uarr;', 'responsive' ); ?></a>

		<?php endif; //end of home-widget-single ?>

    <?php responsive_widgets_end(); // responsive after widgets hook ?>