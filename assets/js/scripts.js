
/** Layout
------------------------------------------------------------ */

// toggle profile menu
$('#topbar li.profile a').on('click', function()
{
    if ($('#nav-profile:visible').length)
        $('#nav-profile').hide();
    else
        $('#nav-profile').show();
});

// close profile menu
$(document).mouseup(function (e)
{
    var container = $('#topbar li.profile');

    if (!container.is(e.target) // if the target of the click isn't the container...
        && container.has(e.target).length === 0) // ... nor a descendant of the container
    {
        $('#nav-profile').hide();
    }
});


// toggle menu
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

// show/hide menu based on screen resolution
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

/*
// amazon type menu system
var $menu = $("#browse");

// jQuery-menu-aim: <meaningful part of the example>
// Hook up events to be fired on menu row activation.
$menu.menuAim({
    activate: activateSubmenu,
    deactivate: deactivateSubmenu
});
// jQuery-menu-aim: </meaningful part of the example>

// jQuery-menu-aim: the following JS is used to show and hide the submenu
// contents. Again, this can be done in any number of ways. jQuery-menu-aim
// doesn't care how you do this, it just fires the activate and deactivate
// events at the right times so you know when to show and hide your submenus.
function activateSubmenu(row) {
    var $row = $(row),
        submenuId = $row.data("submenuId"),
        $submenu = $("#" + submenuId),
        height = $menu.outerHeight(),
        width = $menu.outerWidth();

    // Show the submenu
    $submenu.css({
        display: "block",
        top: -1,
        left: width - 3,  // main should overlay submenu
        height: height - 4  // padding for main dropdown's arrow
    });

    // Keep the currently activated row's highlighted look
    $row.find("a").addClass("maintainHover");
}

function deactivateSubmenu(row) {
    var $row = $(row),
        submenuId = $row.data("submenuId"),
        $submenu = $("#" + submenuId);

    // Hide the submenu and remove the row's highlighted look
    $submenu.css("display", "none");
    $row.find("a").removeClass("maintainHover");
}
*/