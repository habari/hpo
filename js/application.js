$(document).ready(function() {
	positionFooter();
})

var positionFooter = function() {
	var docHeight = $(window).height();
	var footerHeight = $('#ending').height();
	var footerTop = $('#ending').position().top + footerHeight;   
	if (footerTop < docHeight) {
		$('#ending').css('margin-top', (docHeight - footerTop) + 'px');
	}
}

$(window).scroll(positionFooter).resize(positionFooter);