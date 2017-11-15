$(document).ready(function(){
	$('#nav-icon1').click(function(){
		$(this).toggleClass('open');
	});
});

$(document).ready(function () {
	$(document).click(function (event) {
		var clickover = $(event.target);
		var _opened = $(".navbar-collapse").hasClass("navbar-collapse in");
		if (_opened === true && !clickover.hasClass("navbar-toggle")) {
			$("button.navbar-toggle").click();
		}
	});
});
/*
document.querySelector("#myCard").classList.toggle("flip")
*/

$(document).ready(function(){
	var scroll_start = 0;
	var startchange  = $('#nav-change');
	var offset       = startchange.offset();
		if (window.innerWidth > 767) {
			if ( startchange.length ){
				$(document).scroll(function() { 
				scroll_start = $(this).scrollTop();
			if ( scroll_start > offset.top ) {
				$(".navbar-header img").css('width', '6em');
				$(".navbar-header img").css('margin-left', '2em');
				$(".navbar-header img",).css('transition', '.3s')
				$(".navbar .navbar-nav").css('padding-top', '1.5em');
				$(".navbar .navbar-nav").css('transition', '.3s');
			} else {
				$(".navbar-header img").css('width', '13em');
				$(".navbar-header img").css('margin-left', '0em');
				$(".navbar-header img",).css('transition', '.3s')
				$(".navbar .navbar-nav").css('padding-top', '6.5em');
				$(".navbar .navbar-nav").css('transition', '.3s');
				}
			});
		}
	}
});