<?php
/*
        Plugin Name: BuddyPress Memberful
        Description: BuddyPress for memberful
        Author: Tam Love <ask@tamlv.com>
        Version: 1.0
        Text Domain: buddypress-memberful
 */


add_action( 'after_setup_theme', 'buddypress_redirect_users_path' );


function buddypress_redirect_users_path() {
        add_action( 'template_redirect', 'buddypress_redirect_users' );
}

function buddypress_redirect_users() {
	if ( ! is_buddypress_stuff() )
		return;
		
        if ( current_user_can( 'moderate' ) )
                return;
        
        if ( ! is_user_logged_in() ) {
        	wp_redirect( memberful_sign_in_url() );
        	exit();
        }
        
        if ( ! has_memberful_subscription( array('membership-option-1', 'membership-option-2', 'membership-option-3') ) ) {
        	wp_redirect( 'website url for redirecting users to' );
        	exit();
        }
}

function is_buddypress_stuff() {
        global $bp;
	return ( bp_is_activity_component() || bp_is_groups_component() || bp_is_forums_component() || bp_is_blogs_component() || bp_is_page( BP_MEMBERS_SLUG ) );	
}
