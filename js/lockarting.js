/**
 * FONT FACE OBSERVER
 *  Use Font Face Observer to avoid flash of invisible text
 *  It detects when a font loads
 */
const robotoObserver = new FontFaceObserver('Roboto Slab');
const montserratObserver = new FontFaceObserver('Montserrat');
const droidSerifObserver = new FontFaceObserver('Droid Serif');

Promise.all([
    robotoObserver.load(),
    montserratObserver.load(),
    droidSerifObserver.load()
]).then(function(){
    document.documentElement.className += " fonts-loaded";
});


/**
 * CAROUSEL
 * Script to activate the carousel
 */
$('.carousel').carousel({
    interval: 3000 //changes the speed
});


/**
 * JQUERY
 * Script for page scrolling feature - requires jQuery Easing plugin
 */
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        let $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Highlight the top nav as scrolling occurs
$('body').scrollspy({
    target: '.navbar-default'
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});
