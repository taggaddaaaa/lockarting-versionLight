let mobile_menu_visible = 0;

$(document).on("click", ".navbar-toggler", function () {
    if ($toggle = $(this), 1 === mobile_menu_visible) $("html").removeClass("nav-open"), $(".close-layer").remove(), setTimeout(function () {
        $toggle.removeClass("toggled")
    }, 400), mobile_menu_visible = 0;
    else {
        setTimeout(function () {
            $toggle.addClass("toggled")
        }, 430);
        let e = $('<div class="close-layer"></div>');
        0 !== $("body").find(".main-panel").length ? e.appendTo(".main-panel") : $("body").hasClass("off-canvas-sidebar") && e.appendTo(".wrapper-full-page"), setTimeout(function () {
            e.addClass("visible")
        }, 100), e.click(function () {
            $("html").removeClass("nav-open"), mobile_menu_visible = 0, e.removeClass("visible"), setTimeout(function () {
                e.remove(), $toggle.removeClass("toggled")
            }, 400)
        }), $("html").addClass("nav-open"), mobile_menu_visible = 1
    }
});
