<?php if (!defined('ABSPATH'))  die('Security check'); ?>
<span id="cred-generic-shortcode-button" class="cred-media-button">
    <a href='javascript:;' id="cred-generic-shortcode-button-button" class='cred-button' title='<?php echo esc_attr(__('Insert Generic Fields','wp-cred')); ?>'><?php _e('Insert Generic Fields','wp-cred'); ?></a>
    <div id="cred-generic-shortcodes-box" class="cred-popup-box">
        <div class='cred-popup-heading'>
        <h3><?php _e('Generic Fields (click to insert)','wp-cred'); ?></h3>
        <a href='javascript:;' title='<?php echo esc_attr(__('Close','wp-cred')); ?>' class='cred-close-button cred-cred-cancel-close'></a>
        </div>
        <div id="cred-generic-shortcodes-box-inner" class="cred-popup-inner">
        <?php
            foreach ($gfields as $type=>$field)
            {
                echo "<a href='".CRED_CRED::route('/Generic_Fields/getField?field='.$type.'&TB_iframe=true&width=500&height=450')."' class='button thickbox cred_field_add' title='".esc_js(sprintf(__('Insert Field type "%s"','wp-cred'),$field['title']))."'>".$field['title']."</a>";
            }
        ?>
            <a href='javascript:;' onclick="var _href='<?php echo CRED_CRED::route('/Generic_Fields/getField?field=conditional_group'); ?>&post_type='+jQuery('#cred_post_type').val()+'&TB_iframe=true&ampwidth=500&ampheight=450';this.href=_href;return true;" class='button thickbox cred_field_add' title='<?php echo esc_attr(sprintf(__('Insert Field type "%s"','wp-cred'),__('Conditional Group','wp-cred'))); ?>'><?php _e('Conditional Group','wp-cred'); ?></a>
        </div>
        <a class='cred-help-link' style='' href='<?php echo $help['generic_fields_settings']['link']; ?>' target='<?php echo $help_target; ?>' title="<?php echo esc_attr($help['generic_fields_settings']['text']); ?>">
			<i class="icon-question-sign"></i>
			<span><?php echo $help['generic_fields_settings']['text']; ?></span>
		</a>
    </div>
</span>