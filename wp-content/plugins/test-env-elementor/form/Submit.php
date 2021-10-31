<?php 
namespace Form;

class Submit {

    private static $instance = null;



    public function submit() {
        if ( isset( $_POST['submit'] ) ) {
            var_dump( 'Form submited' );
        }       
    }



    public static function get_instance() {
        if ( !isset( $instance ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}