// scrolling
var lastScrollTop = 0

$(window).scroll(function(){
  let wScroll = $(this).scrollTop();

  if(wScroll > lastScrollTop && wScroll > 150){
    $('.navbar').addClass("hilang")
    $('.navbar').removeClass("top-0")
  }else if(wScroll < lastScrollTop){
    $('.navbar').addClass("top-0")
    $('.navbar').removeClass("hilang")
  }

  lastScrollTop = wScroll <= 0 ? 0 : wScroll
})