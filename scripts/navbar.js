const VIDEOBAR_HEIGHT_MIN = 100;
const VIDEOBAR_HEIGHT_MAX = 480;
const VIDEOBAR_TITLE_FONT_MIN = 24;
const VIDEOBAR_TITLE_FONT_MAX = 56;
const VIDEOBAR_SUBTITLE_FONT_MIN = 16;
const VIDEOBAR_SUBTITLE_FONT_MAX = 24;
const NAVBAR_MIN = 50;
const NAVBAR_MAX = 100;
const HEADER_SCROLL_SPEED = 300;



window.onscroll = function() {
    resizeVideobar();
};

function lerp(min_value,max_value,amount) {
    return min_value + amount * (max_value - min_value);
}

function resizeVideobar() {
    var scroll_percent = Math.max(1 - (document.documentElement.scrollTop / 430),0);

    var videobar_height = lerp(VIDEOBAR_HEIGHT_MIN,VIDEOBAR_HEIGHT_MAX,scroll_percent);
    $( ".videobarheight" ).css('max-height', videobar_height.toString() + 'px');

    var videobar_title_font_size = lerp(VIDEOBAR_TITLE_FONT_MIN,VIDEOBAR_TITLE_FONT_MAX,scroll_percent);
    $( "#videobar-title" ).css('font-size', videobar_title_font_size.toString() + 'px');

    var videobar_subtitle_font_size = lerp(VIDEOBAR_SUBTITLE_FONT_MIN,VIDEOBAR_SUBTITLE_FONT_MAX,scroll_percent);
    $( "#videobar-subtitle" ).css('font-size', videobar_subtitle_font_size.toString() + 'px');

    var navbar_height = lerp(NAVBAR_MIN,NAVBAR_MAX,scroll_percent);
    $( "#navbar" ).css('max-height', navbar_height.toString() + 'px');
    $( "#videobar-container" ).css('top', navbar_height.toString() + 'px');
}