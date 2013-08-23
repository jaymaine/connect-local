<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Home Widgets Template
 *
 *
 * @file           sidebar-footer-right.php
 * @package        Responsive 
 * @author         Emil Uzelac 
 * @copyright      2003 - 2012 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive-child-theme/sidebar-footer-right.php
 * @link           http://codex.wordpress.org/Theme_Development#Widgets_.28sidebar.php.29
 * @since          available since Release 1.0
 */
?>
	<?php responsive_widgets(); // above widgets hook ?>
            
		<?php if (!dynamic_sidebar('footer-right')) : ?>

	<a href="<?php echo esc_url(__('http://themeid.com/responsive-theme/','responsive')); ?>" title="<?php esc_attr_e('Responsive Theme', 'responsive'); ?>">
			<?php printf('Responsive Theme'); ?></a>
	<?php esc_attr_e('powered by', 'responsive'); ?> <a href="<?php echo esc_url(__('http://wordpress.org/','responsive')); ?>" title="<?php esc_attr_e('WordPress', 'responsive'); ?>">
			<?php printf('WordPress'); ?></a>

		<?php endif; //end of home-widget-single ?>

    <?php responsive_widgets_end(); // responsive after widgets hook ?>