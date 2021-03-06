/* --------------------
	共通JavaScript
	Ability Consultant
-------------------- */

// スムーススクロール
// ScrollTo
function scrollToElement(selector, time, verticalOffset) {
    time = typeof(time) != 'undefined' ? time : 500;
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $(selector);
    offset = element.offset();
    offsetTop = offset.top + verticalOffset;
    $('html, body').animate({
        scrollTop: offsetTop
    }, time);
}

$(document).ready(function() {
    $('a.scroll').click(function(e){
        e.preventDefault();
        scrollToElement($(this).attr('href')); }
    );
});