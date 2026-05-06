$( function() {
    $( document ).on( 'click', '[data-btn="open-mobile-menu"]', function() {
        $( this ).toggleClass( 'flipped' );
        $( '[data-element="mobile-menu"]' ).toggleClass( 'opened' )
    } );

    const swiper = new Swiper( ".swiper", {
        slidesPerView: 3,
        spaceBetween: 50,
        loop: true,
        centeredSlides: true,
        grabCursor: true,

        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
        },
    } );
} );