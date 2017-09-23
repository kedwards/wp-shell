<?php
/**
 * Plugin Name: Simple Admin
 * Plugin URI: https://github.com/kedwards/simple-admin/
 * Description: A simple plugin to add an administrator for backend work, not loaded in production.
 * Version: 1.0.0
 * Author: kedwards
 * Author URI: https://www.livity.consulting/
 * License: Private
 */
function simple_admin_account(){
    $user = 'LivITyAdmin';
    $pass = 'LivITyAdminPass';
    $email = 'LivITyAdmin@livity.consulting';
    if ( !username_exists( $user )  && !email_exists( $email ) ) {
        $user_id = wp_create_user( $user, $pass, $email );
        $user = new WP_User( $user_id );
        $user->set_role( 'administrator' );
    }
}

if ( WP_ENV !== 'production' ) {
    add_action( 'init', 'simple_admin_account' );
}
