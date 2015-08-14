$(document).ready(function() {
    'use strict';

    windowSize();

    if(homepage) {
        $('.bxslider').bxSlider();
    }

    $(".beers .subnav-links li").click(function(){
        var type = $(this).text().toLowerCase();
        $(".beers .subnav-links li").removeClass("active");
        $(this).addClass("active");
        sortBeer(type);
    });

    $(".beers .beer .thumb").on('click', function (e) {
        e.preventDefault();
        $(this).parent().find('.modal, .backdrop').toggleClass('active');
    });

    $('.backdrop').on('click', function (e) {
        $(this).toggleClass('active');
        $(this).parent().toggleClass('active');
    });

    $('.modal .close').on('click', function (e) {
        $(this).parent().parent().toggleClass('active');
        $(this).parent().next().toggleClass('active');
    });

    if(windowWidth >= 1000) {
        $('nav a').hover(function() { $(this).parent('li').toggleClass('hovered'); });
    }

});

$(window).load(function() {
    sortBeer("all");
});

$(window).resize(function() {
    windowSize();
});

$(window).on("unload", function() {
    $.ajax({ url: '/logout', type: 'post' });
})

function sortBeer(type) {

    if(type == "all") {
        $(".beers .beer").show().animate({opacity:1},500);
        $(".beers .subnav-links li").eq(0).addClass("active");
    } else {
        $(".beers .beer").each(function() {
            $(this).css('opacity', 0).hide();
            if ($(this).attr("data-type").toLowerCase() == type) {
                $(this).show().animate({opacity:1},500);
            } else {
                $(this).animate({opacity:0},500).hide();
            }
        });
    }

}

function openModal(i) {
    console.log('Opening modal for:' + i);
}

function windowSize() {
    windowHeight = window.innerHeight ? window.innerHeight : $(window).height();
    windowWidth = window.innerWidth ? window.innerWidth : $(window).width();
}
