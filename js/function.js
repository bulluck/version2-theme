$(document).ready(function () {
  hsize = $(window).height();
  $(".js-height").css("height", hsize + "px");
});
$(window).resize(function () {
  hsize = $(window).height();
  if (window.matchMedia('screen and (min-width:1024px)').matches)  {
  $(".js-height").css("height", hsize + "px");
  }
});

$(window).scroll(function () {
  var nav = $("#menuwrapper");
  if ($("#change-menu-bg")[0]){
  var distance = $("#change-menu-bg").offset().top - $(window).scrollTop();
  if(distance < 75) {
    nav.addClass('blackbar');
  } else {
    nav.removeClass('blackbar');
  }
  }

});
