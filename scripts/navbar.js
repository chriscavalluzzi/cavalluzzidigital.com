const VIDEOBAR_MIN = 100;
const VIDEOBAR_MAX = 480;
const NAVBAR_MIN = 50;
const NAVBAR_MAX = 100;
const HEADER_SCROLL_SPEED = 300;



window.onscroll = function() {
    resizeVideobar();
};

function resizeVideobar() {
    var h = Math.max(1 - (document.documentElement.scrollTop / 430),0);
    var videobar_h = VIDEOBAR_MIN + h * (VIDEOBAR_MAX - VIDEOBAR_MIN);
    $( ".videobarheight" ).css('max-height', videobar_h.toString() + 'px');
    var navbar_h = NAVBAR_MIN + h * (NAVBAR_MAX - NAVBAR_MIN);
    $( "#navbar" ).css('max-height', navbar_h.toString() + 'px');
    $( "#videobar-container" ).css('top', navbar_h.toString() + 'px');
}