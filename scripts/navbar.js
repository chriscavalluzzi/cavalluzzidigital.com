window.onscroll = function() {
    resizeTitlebar();
};

function resizeTitlebar() {
    var h = Math.max(30 - (document.documentElement.scrollTop / 20),10);
    var elems = document.getElementsByClassName('titlebarheight');
    for(i = 0; i < elems.length; i++) {
        elems[i].style.height = h.toString() + 'em';
    }
}