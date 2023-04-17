$(window).scroll(function(){
  let wScroll = $(this).scrollTop();

  if(wScroll>10){
    $('.navbar').addClass("hilang")
    $('.navbar').removeClass("top-0")
  }else{
    $('.navbar').removeClass("hilang")
    $('.navbar').addClass("top-0")
  }

  if(wScroll >= 180){
    const navbar1 = document.getElementById('navbar-1')
    navbar1.classList.add('position-fixed', 'top-0', 'container', 'bg-white', 'mt-4', 'ms-3')
  }else{
    const navbar1 = document.getElementById('navbar-1')
    navbar1.classList.remove('position-fixed', 'top-0', 'container', 'bg-white', 'mt-4', 'ms-3')
  }
})