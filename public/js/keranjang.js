const first1 = document.getElementById('first1')
const last1 = document.getElementById('last1')
const back1 = document.getElementById('back1')
const next1 = document.getElementById('next1')

setInterval(() => {
  if(first1.classList.contains('active')){
    back1.classList.add('d-none')
  }else{
    back1.classList.remove('d-none')
  }
  
  if(last1.classList.contains('active')){
    next1.classList.add('d-none')
  }else{
    next1.classList.remove('d-none')
  }
}, 10);

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