function sliderSimple(){
    var sliderAction = $("#slider .sliderAction");
    var sliderNext   = sliderAction.next().length ? sliderAction.next() : $("#slider li:first")

    sliderNext.addClass('sliderAction').fadeIn();
    sliderAction.removeClass('sliderAction').fadeOut();
}

$(function(){
    $("#slider li:first").fadeIn();
    window.setInterval("sliderSimple()", 2000);
});