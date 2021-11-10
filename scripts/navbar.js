var navbar_menu_enabled = false;

window.onscroll = function() {
    resizeVideobar();
};

window.onresize = function() {
    resizeVideobar();
}

function lerp(min_value,max_value,amount) {
    return Number(min_value) + amount * (Number(max_value) - Number(min_value));
}

function resizeVideobar() {
    var max_scroll_distance = Number($( "videobar" ).css('--max-height')) - Number($( "navbar" ).css('--min-height'));
    var scroll_position = document.documentElement.scrollTop;
    var scroll_percent = Math.max(1 - (scroll_position / max_scroll_distance),0);

    // navbar
    var navbar_height = lerp($( "navbar" ).css('--min-height'),$( "navbar" ).css('--max-height'),scroll_percent);
    $( "#navbar" ).css('max-height', navbar_height.toString() + 'px');

    // videobar
    var videobar_height = lerp($( "navbar" ).css('--min-height'),$( "videobar" ).css('--max-height'),scroll_percent);
    $( ".videobar-height" ).css('max-height', videobar_height.toString() + 'px');
    var videobar_content_opacity = lerp(-0.5,1,scroll_percent);
    $( "videobar-contentbox" ).css('opacity', videobar_content_opacity.toString());
}

function navbarNavigate(page_name) {
    window.location.href = "/" + page_name;
}

function navbarToggleMenu() {
    if (navbar_menu_enabled) {
        navbarDisableMenu();
    } else {
        navbarEnableMenu();
    }
}

function navbarEnableMenu() {
    $( "navbar-dropdown" ).css("visibility","visible");
    $( "navbar-dropdown" ).css("opacity","1.0");
    $( "navbar-dropdown-cancel-overlay" ).css("visibility","visible");
    navbar_menu_enabled = true;
}

function navbarDisableMenu() {
    $( "navbar-dropdown" ).css("visibility","hidden");
    $( "navbar-dropdown" ).css("opacity","0.0");
    $( "navbar-dropdown-cancel-overlay" ).css("visibility","hidden");
    navbar_menu_enabled = false;
}

function stopOnclickPropagation(e) {
    var event = e /* W3C-compliant */ || window.event /* Legacy browsers */;
    event.stopPropagation();
}