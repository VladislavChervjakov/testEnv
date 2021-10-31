<?php

/*
 * Elementor Custom Heading Plugin
 *
 * @package CustomHeading
 *
 * Plugin Name: Test Env
 * Description: Test Environment 
 * Version:     1.0.0
 * Author:      Vlad
 * Text Domain: test-env-elementor
 */

if(!defined('ABSPATH')) exit; // Exit if accessed directly


add_action( 'wp_ajax_enquiry', 'enquiry_form' );
add_action( 'wp_ajax_nopriv_enquiry', 'enquiry_form' );

function enquiry_form() {
    $formdata = [];

    wp_parse_str( $_POST['enquiry'], $formdata );

    wp_send_json_success( $formdata['email'] );
}


define( 'TEST_ENV', __FILE__ );

/**
 * Include the Test_Env class.
 */
require plugin_dir_path( TEST_ENV ) . 'test-env-elementor.php';