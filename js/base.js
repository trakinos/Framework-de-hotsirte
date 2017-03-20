function telaclass(x, y = 0) {
  if ($(window).outerWidth() > y) {
    $(x).css("height", ($(window).innerHeight() - 60) +"px");
  } else {
    $(x).css("height", "auto");
  }
}

$(document).ready(function() {
  $('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top - 100
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	        $(".menu").removeClass("aberto");
	    });
	});
  $("#overall_close_tel, .close_over").click(function(){
      $("#overall_tel").fadeOut(500);
  });
  $("#overall_close_end, .close_over").click(function(){
      $("#overall_end").fadeOut(500);
  });
  $("#menu_open").click(function(){
    $(".menu").toggleClass("aberto");
  });

  $('a.end_trigger').click(function (e) {
    e.preventDefault();                   // prevent default anchor behavior
    var goTo = this.getAttribute("href"); // store anchor href
    $("#overall_end").fadeIn(500);
    $("iframe.end_frame").attr("src", goTo);
  });
  $('a.tel_trigger').click(function (e) {
    e.preventDefault();                   // prevent default anchor behavior
    var goTo = this.getAttribute("href"); // store anchor href
    $("#overall_tel").fadeIn(500);
    $("iframe.tel_frame").attr("src", goTo);
  });

  $(window).scroll(function() {
		if ($(document).scrollTop() > 200) {
			$("header#fixo").addClass("ativo");
		} else {
			$("header#fixo").removeClass("ativo");
		}
  });


});
