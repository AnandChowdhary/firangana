var headerHeight = $(".masthead").height();

$(function() {
    $("body").css("padding-top", headerHeight + "px");
});

var lastScrollTop = 0;
$(window).scroll(function() {
    var st = $(this).scrollTop();
    if ($(window).scrollTop() == 0) {
        $(".masthead").css("box-shadow", "none");
    }
    if (st > lastScrollTop) {
        if ($(window).scrollTop() < (headerHeight + 10)) {
            $(".masthead").css("transition", "none");
            $(".masthead").css("top", "-" + $(window).scrollTop() + "px");
        } else {
            $(".masthead").css("transition", "top 0.3s");
            $(".masthead").css("box-shadow", "0 0 20px rgba(0, 0, 0, 0.1)");
            $(".masthead").css("top", "-" + (headerHeight + 20) + "px");
        }
    } else {
        $(".masthead").css("top", "0");
    }
    lastScrollTop = st;
});
