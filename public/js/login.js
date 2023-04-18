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

// show password
let icon = document.getElementById('icon');
let password = document.getElementById('password');
let showPassword = document.getElementById('showpassword');

showPassword.addEventListener('click', function(){
  if (password.getAttribute("type") === 'password') {
    password.setAttribute("type", "text")
    icon.setAttribute("name", "eye-off-outline")
    document.getElementById('text-show-hide').innerHTML = "HIDE"
  } else {
    password.setAttribute("type", "password")
    icon.setAttribute("name", "eye-outline")
    document.getElementById('text-show-hide').innerHTML = "SHOW"
  }
})