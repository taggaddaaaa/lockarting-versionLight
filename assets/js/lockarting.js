/**
 * FONT FACE OBSERVER
 *  Use Font Face Observer to avoid flash of invisible text
 *  It detects when a font loads
 */
const robotoObserver = new FontFaceObserver('Roboto');
const robotoSlabObserver = new FontFaceObserver('Roboto Slab');
const montserratObserver = new FontFaceObserver('Montserrat');
const droidSerifObserver = new FontFaceObserver('Droid Serif');
const materialIconsObserver = new FontFaceObserver('Material Icons');

Promise.all([
    robotoObserver.load(),
    robotoSlabObserver.load(),
    montserratObserver.load(),
    droidSerifObserver.load(),
    materialIconsObserver.load()
]).then(function(){
    document.documentElement.className += " fonts-loaded";
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
    target: '.navbar'
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
    $('.navbar-toggle:visible').click();
});


/**
 * SCROLL TO THE TOP OF THE PAGE
 */
$(window).on('scroll', function() {
    if ($(this).scrollTop() > 500) {
        $('.tap-top').fadeIn();
    } else {
        $('.tap-top').fadeOut();
    }
});
$('.tap-top').on('click', function() {
    $("html, body").animate({
        scrollTop: 0
    }, 600);
    return false;
});

/**
 * To hide or show an html element selected by his id
 * Used in register form for business informations
 * @param id
 * @returns {boolean}
 */
function show_element(id) {
    if (document.getElementById(id).style.visibility === "hidden") {
        document.getElementById(id).style.visibility = "visible";
    } else {
        document.getElementById(id).style.visibility = "hidden";
    }
    return true;
}


<!------------------------------------------->
<!-- TRY TO MAKE SOME RULES ON FORM INPUTS -->
<!------------------------------------------->
//Dans un input avec cette classe 'alpha-only', on accepte seulement les lettres et autres caracteres d'edition de texte
$(".alpha-only")
    .on("keydown", function(event){
        // Ignore controls such as backspace
        let arr = [8,16,17,20,35,36,37,38,39,40,45,46];

        // Allow letters
        for(let i = 65; i <= 90; i++){
            arr.push(i);
        }

        if(jQuery.inArray(event.which, arr) === -1){
            event.preventDefault();
        }
    })
    .on("input", function(){
        let regexp = /[^a-zA-Z]/g;});
