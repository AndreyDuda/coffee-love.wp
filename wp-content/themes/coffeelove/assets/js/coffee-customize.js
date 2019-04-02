(function($){
   /* wp.customize( 'test_link_color', function( value ) {
        value.bind( function( newval ) {
            $('a').css('color', newval);
        } );
    } );*/

    /*wp.customize( 'sale', function( value ) {
        value.bind( function( newval ) {
            $('.test-phone span').text(newval);
        } );
    } );*/

    wp.customize( 'sale_show', function( value ) {
        value.bind( function( newval ) {
            false === newval ? $('.test-phone').fadeOut() : $('.test-phone').fadeIn();
        } );
    } );

})(jQuery);
