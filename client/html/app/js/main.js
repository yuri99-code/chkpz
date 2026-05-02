$( function() {
    $( document ).on( 'click', '[data-btn="open-mobile-menu"]', function() {
        $( this ).toggleClass( 'flipped' );
        $( '[data-element="mobile-menu"]' ).toggleClass( 'opened' )
    } );

    const swiper = new Swiper( ".swiper", {
        slidesPerView: 5,
        spaceBetween: 50,
        loop: true,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false
        },
        centeredSlides: true,
        grabCursor: true,
        breakpoints: {
            0: {
                slidesPerView: 1.5,
                spaceBetween: 10,
                centeredSlides: true
            },
            576: {
                slidesPerView: 2.5,
                spaceBetween: 15,
                centeredSlides: true
            },
            1024: {
                slidesPerView: 4.5,
                spaceBetween: 20,
                centeredSlides: true
            }
        }
    } );

    $( document ).on( 'scroll', window, function() {
        const header = $( '.header' );
        if ( window.scrollY > 30 ) {
            header.addClass( 'header-scrolled' );
        } else {
            header.removeClass( 'header-scrolled' );
        }
    } );

    $( document ).on( 'click', '[data-vacancy-btn-id]', function() {
        const id = $( this ).attr( 'data-vacancy-btn-id' );
        const collapsedSection = $( `[data-vacancy-collapsed-id='${ id }']` );
        if ( collapsedSection.hasClass( 'vacancies__item-collapsed_open' ) ) {
            $( this ).text( 'Read more' );
        } else {
            $( this ).text( 'Hide all' );
        }
        collapsedSection.toggleClass( 'vacancies__item-collapsed_open' );
        $( `[data-vacancy-id='${ id }']` ).toggleClass( 'vacancies__item-collapsed_open' );
    } );

    $( document ).on( 'click', '[data-popup="notification-popup"]', function() {
        $( this ).removeClass( 'notification-popup_open' );
    } );
} );