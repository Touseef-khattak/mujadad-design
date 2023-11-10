const url = getUrl();
function animate(){

}
function isInView(elem){
    return $(elem).offset().top - $(window).scrollTop() < $(elem).height() ;
}
function getUrl(){
    let url = window.location.href;
    url = url.split('/');
    url = url[(url.length - 1)];
    return url;
}
let oldValue = 0;
window.addEventListener('scroll', function(e){

    // Get the new Value
    newValue = window.pageYOffset;

    //Subtract the two and conclude

    oldValue = newValue;
});
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
topFunction();

$(document).ready(function () {

    $("#status").fadeOut();
    $("#preloader").delay(500).fadeOut("slow");
    animate();



    $(window).scroll(function(){

    })

    $("#show_dropdown").click(function () {
        $('.navbar').animate({
            height: ($('nav').innerHeight() == 285) ? 71: 285
        }, 500);
    });
    $('#accordion-button').click(function(){
        $('nav').animate({
            height: ($('nav').innerHeight() == 570) ? 400: 570
        }, 100);
    })
    $('.navbar-toggler').click(function(){
        $('#nav-icon').toggleClass('open');
        $('nav').animate({
            height: ($('nav').innerHeight() == 61) ? 400 : 61
        }, 300);
    });

});

