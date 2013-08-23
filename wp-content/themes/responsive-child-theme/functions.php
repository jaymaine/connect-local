<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

    /**
     * Remove profile fields.
     */
     
     
function edit_contactmethods( $contactmethods ) {
 $contactmethods['facebook'] = 'Facebook'; 
 $contactmethods['twitter'] = 'Twitter';
   unset($contactmethods['yim']);
   unset($contactmethods['aim']);
   unset($contactmethods['jabber']);
 return $contactmethods;
 }
add_filter('user_contactmethods','edit_contactmethods',10,1);
 
 
add_editor_style(editor-style.css);
 

add_filter( 'bbp_is_site_public', '__return_true' );

    /**
     * WordPress Widgets start right here.
     */
    function responsive_child_widgets_init() {
		
        register_sidebar(array(
            'name' => __('Footer Left', 'responsive'),
            'description' => __('Area D - sidebar-footer-left.php', 'responsive'),
            'id' => 'footer-left',
            'before_title' => '<div id="widget-title-one" class="widget-title-home"><h3>',
            'after_title' => '</h3></div>',
            'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
            'after_widget' => '</div>'
        ));	
		
        register_sidebar(array(
            'name' => __('Footer Center', 'responsive'),
            'description' => __('Area E - sidebar-footer-center.php', 'responsive'),
            'id' => 'footer-center',
            'before_title' => '<div id="widget-title-one" class="widget-title-home"><h3>',
            'after_title' => '</h3></div>',
            'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
            'after_widget' => '</div>'
        ));	
		
		        register_sidebar(array(
            'name' => __('Footer Right', 'responsive'),
            'description' => __('Area F - sidebar-footer-right.php', 'responsive'),
            'id' => 'footer-right',
            'before_title' => '<div id="widget-title-one" class="widget-title-home"><h3>',
            'after_title' => '</h3></div>',
            'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
            'after_widget' => '</div>'
        ));
    }
    
    add_action('widgets_init', 'responsive_child_widgets_init');


/**
 * Automatically adds members to group 8 when they are registered
 */
function automatic_group_membership( $user_id ) {
	if( !$user_id )
		return false;

	groups_accept_invite( $user_id, 8 );
}
add_action( 'user_register', 'automatic_group_membership' );



/* Add Buttons to Activity Stream Items */
/* http://bp-tricks.com/snippets/adding-buttons-to-activity-stream-entries/ */
function my_bp_activity_entry_content() {

    if ( bp_get_activity_object_name() == 'blogs' && bp_get_activity_type() == 'new_blog_post' ) {?>
        <a class="view-post view-group-blog-comment" href="<?php bp_activity_thread_permalink() ?>">View group blog</a>
    <?php }

    if ( bp_get_activity_object_name() == 'blogs' && bp_get_activity_type() == 'new_blog_comment' ) {?>
        <a class="view-post view-group-blog-comment" href="<?php bp_activity_thread_permalink() ?>">View group blog</a>
    <?php }

    if ( bp_get_activity_object_name() == 'activity' && bp_get_activity_type() == 'activity_update' ) {?>
        <a class="view-post view-group-activity" href="<?php bp_activity_thread_permalink() ?>">View status update</a>
    <?php }

        if ( bp_get_activity_object_name() == 'groups' && bp_get_activity_type() == 'new_forum_topic' ) {?>
        <a class="view-thread view-group-discussion-topic" href="<?php bp_activity_thread_permalink() ?>">View group discussion</a>
    <?php }

        if ( bp_get_activity_object_name() == 'groups' && bp_get_activity_type() == 'new_forum_post' ) {?>
        <a class="view-post view-group-discussion-post" href="<?php bp_activity_thread_permalink() ?>">View group discussion</a>
    <?php }

}
add_action('bp_activity_entry_content', 'my_bp_activity_entry_content');



/* Change default member avatar */
/* http://bp-tricks.com/snippets/adding-buttons-to-activity-stream-entries/ */
function myavatar_add_default_avatar( $url )
{

return get_stylesheet_directory_uri() .'/images/default-avatar.jpg';
}
add_filter( 'bp_core_mysteryman_src', 'myavatar_add_default_avatar' );


/**
 * Lower priority of automatic p tags
 *
 * This allows other plugins to modify the content of a blog post before
 * wpautop() has its way
 *
 * http://wordpress.org/extend/plugins/column-matic/faq/
 */
add_filter( 'the_content', 'wpautop',20 );



?>