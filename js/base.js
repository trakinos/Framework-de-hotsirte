// function vertmid(x, y = 0, z = "auto") {
//   if ($(window).outerWidth() > y) {
//     $(x).css("margin-top", "-" + $(x).outerHeight()/2 +"px");
//   } else {
//     $(x).css("margin-top", z);
//   }
// }
function hormid(x) {
  $(x).css("margin-left", "-" + $(x).outerWidth()/2 +"px");
}
// function telaclass(x, y = 0) {
//   if ($(window).outerWidth() > y) {
//     $(x).css("height", ($(window).innerHeight() - 60) +"px");
//   } else {
//     $(x).css("height", "auto");
//   }
// }

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
  var espacobase = $(window).innerHeight();
  var espacoter = $(window).innerHeight()*0.35;
  var espaco = 80;

  function resize_base() {
    // telaclass("#video_home");
    // telaclass(".telaclass9", 960);
    // telaclass(".telaclass");
    // vertmid(".area3 .texto_lateral", 960, "0px");
    espacobase = $(window).innerHeight();
    espacoter = $(window).innerHeight()*0.35;


    // ponto2 = $(".area2").offset().top - espacoter;
    // ponto3 = $(".area3").offset().top - espacoter;
  }

  resize_base();
  $(window).resize(function(){
    resize_base();
  });
  $(window).scroll(function(){
    resize_base();
    // var arr = [ "one", "two", "three", "four", "five" ];
    // var num = arr.length;
    // var superior;
    // var inferior;
    // $.each(arr, function (index, value) {
    //   superior = index + 1;
    //   inferior = index - 1;
    //   if (index == 0) {
    //     if ($(document).scrollTop() < ($("#"+arr[superior]).offset().top - espacoter)) {
    //       $("#"+value).addClass("ativa");
    //       $(".menu_item_lk."+value).addClass("selected");
    //     } else {
    //       $("#"+value).removeClass("ativa");
    //       $(".menu_item_lk."+value).removeClass("selected");
    //     }
    //   } else if (index > 0) && (index < (num - 1)) {
    //     if (($(document).scrollTop() > ($("#"+value).offset().top - espacoter)) && ($(document).scrollTop() < ($("#"+arr[superior]).offset().top - espacoter)) {
    //       $("#"+value).addClass("ativa");
    //       $(".menu_item_lk."+value).addClass("selected");
    //     } else {
    //       $("#"+value).removeClass("ativa");
    //       $(".menu_item_lk."+value).removeClass("selected");
    //     }
    //   }
    // });
  });




  $(".telefone_soc").click(function(){
      $("#overall_tel").fadeIn(500);
      $("iframe.tel_frame").attr("src", "http://vittaclubedeviver.com.br/contato/telefone.php");
  });
  $("#overall_close_tel, .close_over").click(function(){
      $("#overall_tel").fadeOut(500);
  });
  // $(".map_trg").click(function(){
  //     $("#overall_end").fadeIn(500);
  //     $("iframe.end_frame").attr("src", "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.7344560270767!2d-46.87071424944412!3d-23.506072265362906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf03d23b880883%3A0xae79ffc7320c59ae!2sAv.+Trindade%2C+216+-+Bethaville+I%2C+Barueri+-+SP%2C+06404-326!5e0!3m2!1spt-BR!2sbr!4v1479338353907");
  // });
  $("#overall_close_end, .close_over").click(function(){
      $("#overall_end").fadeOut(500);
  });
  $("#menu_open").click(function(){
    $(".menu").toggleClass("aberto");
  });
  // var pontofinal = $("#botoes_contato").offset().top - espacoter;
  $(window).scroll(function() {
		if ($(document).scrollTop() > 200) {
			$("header#fixo").addClass("ativo");
		} else {
			$("header#fixo").removeClass("ativo");
		}
  });


});
