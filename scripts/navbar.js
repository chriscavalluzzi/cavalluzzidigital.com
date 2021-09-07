const TITLEBAR_MIN = 10;
const TITLEBAR_MAX = 30;
const NAVBAR_MIN = 50;
const NAVBAR_MAX = 100;
const HEADER_SCROLL_SPEED = 300;
var setup = false;

window.onscroll = function() {
    resizeTitlebar();
};

function resizeTitlebar() {
    var h = Math.max(1 - (document.documentElement.scrollTop / HEADER_SCROLL_SPEED),0);
    var titlebar_h = TITLEBAR_MIN + h * (TITLEBAR_MAX - TITLEBAR_MIN);
    $( ".titlebarheight" ).css('max-height', titlebar_h.toString() + 'em');
    var navbar_h = NAVBAR_MIN + h * (NAVBAR_MAX - NAVBAR_MIN);
    $( "#navbar" ).css('max-height', navbar_h.toString() + 'px');
    $( "#titlebar-container" ).css('top', navbar_h.toString() + 'px');
}