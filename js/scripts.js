// Window Size
function windowSize() {
    windowHeight = window.innerHeight ? window.innerHeight : $(window).height();
    windowWidth = window.innerWidth ? window.innerWidth : $(window).width();
}
$(window).resize(function() {
    windowSize();
});

$(document).ready(function() {
    windowSize();
    if(windowWidth >= 1000) {
        $('nav a').hover(function() { $(this).parent('li').toggleClass('hovered'); });
    } // Desktop size and up
});

$(window).on("unload", function() { 
    $.ajax({ url: '/logout', type: 'post' });
})