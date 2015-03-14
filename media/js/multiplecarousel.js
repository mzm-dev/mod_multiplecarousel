jQuery('#myCarousels').carousel({
    interval: 40000
});


jQuery('.carousel-slide .item').each(function () {
    var next = jQuery(this).next();
    if (!next.length) {
        next = jQuery(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo(jQuery(this));

    if (next.next().length > 0) {

        next.next().children(':first-child').clone().appendTo(jQuery(this)).addClass('rightest');

    }
    else {
        jQuery(this).siblings(':first').children(':first-child').clone().appendTo(jQuery(this));

    }
});