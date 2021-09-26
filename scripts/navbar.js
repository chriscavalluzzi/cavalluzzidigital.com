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
    var videobar_scroll_percent = Math.max(1 - ((scroll_position - $( "navbar" ).css('--max-height')) / max_scroll_distance),0);
    var navbar_scroll_percent = Math.max(1 - (scroll_position / (max_scroll_distance + Number($( "navbar" ).css('--max-height')))),0);

    // navbar
    var navbar_height = lerp($( "navbar" ).css('--min-height'),$( "navbar" ).css('--max-height'),navbar_scroll_percent);
    $( "#navbar" ).css('max-height', navbar_height.toString() + 'px');

    // videobar
    var videobar_top, videobar_height;
    if (scroll_position < $( "navbar" ).css('--max-height')) {
        videobar_top = $( "navbar" ).css('--max-height') - scroll_position;
        videobar_height = $( "videobar" ).css('--max-height');
    } else {
        videobar_top = 0;
        videobar_height = lerp($( "navbar" ).css('--min-height'),$( "videobar" ).css('--max-height'),videobar_scroll_percent);
    }
    $( "#videobar-container" ).css('top', videobar_top.toString() + 'px');
    $( ".videobar-height" ).css('max-height', videobar_height.toString() + 'px');
    var videobar_content_opacity = lerp(-1,1,videobar_scroll_percent);
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
    navbar_menu_enabled = true;
}

function navbarDisableMenu() {
    $( "navbar-dropdown" ).css("visibility","hidden");
    $( "navbar-dropdown" ).css("opacity","0.0");
    navbar_menu_enabled = false;
}