$(document).ready(function() {
	positionFooter();
})

var positionFooter = function() {
	var docHeight = $(window).height();
	var ft_el = $('#ending');
	
	if(!ft_el.length) {
		ft_el = $('body > footer');
	}
	
	var footerHeight = ft_el.height();
	var footerTop = ft_el.position().top + footerHeight;
	if (footerTop < docHeight) {
		ft_el.css('margin-top', (docHeight - footerTop) + 'px');
	}
}

$(window).scroll(positionFooter).resize(positionFooter);

$('#show_menu').toggle(function() {
	var $width = $('#mobile_menu').width();
	$('body').css('background-color', '#333');
	$('body > div').animate({ marginLeft: $width }, 300, function() {
		$('#mobile_menu').show();
	});
}, function() {
	$('#mobile_menu').hide();
	$('body > div').animate({ marginLeft: 0 }, 300);
});