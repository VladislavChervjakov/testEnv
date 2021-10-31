<?php

/**
 * CustomHeading class.
 *
 * @category   Class
 * @package    CustomHeading
 * @subpackage WordPress
 * @author     Vlad
 * @since      1.0.0
 * php version 7.3.0
 */


 //require_once( dirname '/form/Submit.php' );

//if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) { require_once dirname( __FILE__ ) . '/vendor/autoload.php'; }

require_once WP_PLUGIN_DIR . '/test-env-elementor/vendor/autoload.php';

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Form\Submit;


if(!defined('ABSPATH')) exit; // Exit if accessed directly

class Form_Elementor extends Widget_Base {

    public function __construct( $data = [], $args = null ) {

        parent::__construct( $data, $args );

        wp_enqueue_script( 'test-env-form-script', plugin_dir_url( dirname( __FILE__, 1 ) ) . 'assets/js/test-env-form.js', ['jquery']);

    }


    public function get_style_depends() {

        return [ 'test-env-form-script' ];

    }

    public function get_name()
    {
        return 'form';
    }

    public function get_title()
    {
        return 'Form';
    }

    public function get_icon()
    {
        return 'fa fa-wpforms';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    protected function _register_controls() { }

    

    //php render
    protected function render()
    {   $settings = $this->get_settings_for_display();
        ?>
        <form id="contactForm" name='test_form' method="post">
            <label for="email_field">Email:</label>
            <input name="email" id="email_field" type="email"><br>
            <label for="message_field">Message:</label>
            <textarea name="message" id="message_field" cols="30" rows="10"></textarea>
            <input type="submit" name="submit" value="Send!">
        </form>

        <?php
    }

    // JS Render
    protected function content_template()
    {
  
    }

}