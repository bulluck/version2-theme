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

$(function() {
  var l = $("#page-top");
  l.hide(), $(window).scroll(function() {
    $(this).scrollTop() > 100 ? l.fadeIn() : l.fadeOut()
  }), l.click(function() {
    return $("body,html").animate({
      scrollTop: 0
    }, 500), !1
  })
}), $(function() {
  $("a[href^=#]").click(function() {
    var l = 30,
      s = 500,
      c = $(this).attr("href"),
      i = $("#" == c || "" == c ? "html" : c),
      o = i.offset().top - l;
    return $("body,html").animate({
      scrollTop: o
    }, s, "swing"), !1
  })
})

$("#slide").click(function() {
 $("#target").slideToggle(), "block" == $("#target").css("display") ? ($("#slide").css("display", "none"), $("#close").css("display", "block")) : ($("#slide").css("display", "block"), $("#close").css("display", "none"))
}), $("#close").click(function() {
 $("#slide").css("display", "block"), $("#close").css("display", "none"), $("#target").slideToggle()
});
