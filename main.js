
(function ($) {
    'use strict';

    // ===== Main Menu
    function mainMenu() {
        const navbarToggler = $('.navbar-toggler'),
            navMenu = $('.nav-menu'),
            mobilePanel = $('.mobile-slide-panel'),
            mobilePanelMenu = $('.mobile-menu'),
            panelOverly = $('.panel-overlay'),
            navClose = $('.panel-close'),
            canvasBtn = $('.off-canvas-btn'),
            canvasPanel = $('.off-canvas-panel');

        // Panel Click Event
        navbarToggler.on('click', function (e) {
            e.preventDefault();
            mobilePanel.toggleClass('show-panel');
        });
        canvasBtn.on('click', function (e) {
            e.preventDefault();
            canvasPanel.toggleClass('show-panel');
        });
        navClose.on('click', function (e) {
            e.preventDefault();
            mobilePanel.removeClass('show-panel');
            canvasPanel.removeClass('show-panel');
        });
        panelOverly.on('click', function (e) {
            e.preventDefault();
            mobilePanel.removeClass('show-panel');
            canvasPanel.removeClass('show-panel');
        });

        // Adds toggle button to li items that have children
        navMenu.find('li a').each(function () {
            if ($(this).next().length > 0) {
                $(this).append('<span class="dd-trigger"><i class="fas fa-angle-down"></i></span>');
            }
        });

        mobilePanelMenu.find('li a').each(function () {
            if ($(this).next().length > 0) {
                $(this).append('<span class="dd-trigger"><i class="fas fa-angle-down"></i></span>');
            }
        });

        // Expands the dropdown menu on each click
        mobilePanelMenu.find('.dd-trigger').on('click', function (e) {
            e.preventDefault();
            $(this).parent().parent('li').children('ul.submenu').stop(true, true).slideToggle(350);
            $(this).toggleClass('submenu-opened');
        });
    }

    // ===== Testimonials Slider One
    function testimonialSliderOne() {
        const slider = $('.testimonial-slider-one');

        slider.slick({
            infinite: true,
            dots: true,
            arrows: false,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
        });
    }
    /*---------------------
    === Document Ready  ===
    ----------------------*/
    $(document).ready(function () {
        mainMenu();
        testimonialSliderOne();
        testimonialSliderTwo();
        counterUp();
        progressBar();
        activeIsotope();
        activeNiceSelect();
        portfolioSlider();
        accordionClassToggle();
        logoCarousel();
        productGallery();
        relatedProductSlider();
    });

    /*---------------------
    === Window Scroll  ===
    ----------------------*/
    $(window).on('scroll', function () {
        stickyHeader();
    });

    /*------------------
    === Window Load  ===
    --------------------*/
    $(window).on('load', function () {
        preloader();
        new WOW().init();
    });

})(jQuery);