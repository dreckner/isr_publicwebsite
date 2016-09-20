$(function() { 
	//Add javascript new windows to external links
	$('a[rel="external"]').click(function () {
		window.open($(this).prop("href"),"_blank");
		return false;
	});
	var menu_list = $('#menu_list');

/*	menu_list.toggle();
	$('#menu_button').click(function () { 
		menu_list.slideToggle(400);
	});
*/
	$('#menu_button').click(function () { 
		if ($('#menu_list').hasClass("inactive")) {
                	menu_list.removeClass("inactive");
		} else {
                	menu_list.addClass("inactive");
		}
	});

	if(!!('ontouchstart' in window)) {//check for touch device
		var superitems = menu_list.find('li ul').parent().children('a');
		superitems.click(function() {
			if ($('#menu_list').hasClass("inactive")) {
				if ($(this).parent().hasClass("hover")) {
					$(this).parent().removeClass("hover");
					//remove focus to stop :hover css (doesn't work)
					$(this).blur();

				} else {
					$(this).parent().addClass("hover");
				}
				return false;
			}
		});
	}

	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
		$('html,body').animate({
		  scrollTop: target.offset().top
		}, 1000);
		return false;
	      }
	    }
	  });



});
/*
function allowDrop(ev)
{
	ev.preventDefault();
}

function drag(ev)
{
	ev.dataTransfer.setData("Text",ev.target.id);
}

function drop(ev)
{
	ev.preventDefault();
	var data=ev.dataTransfer.getData("Text");
	$('#data').css({'top':mouseY, 'left':mouseX})
}

*/


function drag_start(event) {
    var style = window.getComputedStyle(event.target, null);
    event.dataTransfer.setData("text/plain",event.target.id + ',' + 
    (parseInt(style.getPropertyValue("left"),10) - event.clientX) + ',' + (parseInt(style.getPropertyValue("top"),10) - event.clientY));
} 
function drag_over(event) { 
    event.preventDefault(); 
    return false; 
} 
function drop(event) { 
    var offset = event.dataTransfer.getData("text/plain").split(',');
    var dm = document.getElementById(offset[0]);
    dm.style.left = (event.clientX + parseInt(offset[1],10)) + 'px';
    dm.style.top = (event.clientY + parseInt(offset[2],10)) + 'px';
    event.preventDefault();
    return false;
} 

function spinner() {
	return "<div class='spinner' style='width: 34px; height: 34px'> <div class='bar1'></div> <div class='bar2'></div> <div class='bar3'></div> <div class='bar4'></div> <div class='bar5'></div> <div class='bar6'></div> <div class='bar7'></div> <div class='bar8'></div> <div class='bar9'></div> <div class='bar10'></div> <div class='bar11'></div> <div class='bar12'></div> </div>";
}
