const TITLEBAR_MIN = 10;
const TITLEBAR_MAX = 30;
const TITLEBAR_SPEED = 30;
var setup = false;

window.onscroll = function() {
    resizeTitlebar();
};

function resizeTitlebar() {
    var h = Math.max(TITLEBAR_MAX - (document.documentElement.scrollTop / TITLEBAR_SPEED),TITLEBAR_MIN);
    $( ".titlebarheight" ).css('max-height', h.toString() + 'em');
}