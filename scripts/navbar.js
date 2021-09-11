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
    var max_scroll_distance = (Number($( "navbar" ).css('--max-height')) - Number($( "navbar" ).css('--min-height'))) + (Number($( "videobar" ).css('--max-height')) - Number($( "videobar" ).css('--min-height')));
    var scroll_percent = Math.max(1 - (document.documentElement.scrollTop / max_scroll_distance),0);

    var videobar_height = lerp($( "videobar" ).css('--min-height'),$( "videobar" ).css('--max-height'),scroll_percent);
    $( ".videobarheight" ).css('max-height', videobar_height.toString() + 'px');

    var videobar_title_font_size = lerp($( "videobar-title" ).css('--min-font-size'),$( "videobar-title" ).css('--max-font-size'),scroll_percent);
    $( "#videobar-title" ).css('font-size', videobar_title_font_size.toString() + 'px');

    var videobar_subtitle_font_size = lerp($( "videobar-subtitle" ).css('--min-font-size'),$( "videobar-subtitle" ).css('--max-font-size'),scroll_percent);
    $( "#videobar-subtitle" ).css('font-size', videobar_subtitle_font_size.toString() + 'px');

    var navbar_height = lerp($( "navbar" ).css('--min-height'),$( "navbar" ).css('--max-height'),scroll_percent);
    $( "#navbar" ).css('max-height', navbar_height.toString() + 'px');
    $( "#videobar-container" ).css('top', navbar_height.toString() + 'px');

    $( "body-container" ).css('top', (Number($( "navbar" ).css('--max-height')) + Number($( "videobar" ).css('--max-height'))).toString() + 'px')
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
    navbar_menu_enabled = true;
}

function navbarDisableMenu() {
    $( "navbar-dropdown" ).css("visibility","hidden");
    navbar_menu_enabled = false;
}