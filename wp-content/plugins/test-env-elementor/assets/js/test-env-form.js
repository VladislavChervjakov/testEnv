( function( $ ) {
    console.log( $( '#contactForm' ));
    
    $( '#contactForm' ).submit( ( e ) => {
        e.preventDefault();
        
        const endpoint = 'http://localhost/testEnv/wp-admin/admin-ajax.php';

        const form = $( '#contactForm' ).serialize();

        console.log(form);
        

        const formData = new FormData();

        formData.append( 'action', 'enquiry' );
        formData.append( 'enquiry', form );

        $.ajax( endpoint, {
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,

            success: ( res ) => {
                alert( res.data );
            },

            error: ( err ) => {

            }

        } );

    } );
} )( jQuery )
