<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-footer-left.php
 * @package        Responsive 
 * @author         Ulrich Pogson 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive-child-theme/sidebar-footer-left.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
	<?php responsive_widgets(); // above widgets hook ?>
            
		<?php if (!dynamic_sidebar('footer-left')) : ?>

			<?php esc_attr_e('&copy;', 'responsive'); ?> <?php _e(date('Y')); ?>
			<a href="<?php echo home_url('/') ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
				<?php bloginfo('name'); ?>
			</a>

		<?php endif; //end of home-widget-single ?>

    <?php responsive_widgets_end(); // responsive after widgets hook ?>