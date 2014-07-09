
$('#menulink').on('click', function()
{
	if ( $('body').hasClass('menu-regular-min') )
	{
		$('body').toggleClass('menu-regular-min-active menu-regular-min-inactive');
	}
	else if ( $('body').hasClass('menu-regular') )
	{
		$('body').toggleClass('menu-regular-active menu-regular-inactive');
	}
	else if ( $('body').hasClass('menu-overlay') )
	{
		$('body').toggleClass('menu-overlay-active menu-overlay-inactive');
	}
});

$(window).resize(function() { menu_screensize() });
function menu_screensize()
{
	if ( $(window).width() < 1240)
	{
		$('body').addClass('menu-regular-min');
	}
	else
	{
		$('body').removeClass('menu-regular-min');
	}
}
menu_screensize();