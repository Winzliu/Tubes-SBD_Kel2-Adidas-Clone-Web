$(window).scroll(function(){
  const menu = document.getElementById('navbar-menu')
  const galeri = document.getElementById('galeri')
  const deskripsi = document.getElementById('deskripsi')
  const detail = document.getElementById('detail')
  const ulasan = document.getElementById('ulasan')
  const sisiKanan = document.getElementById('tampilanKanan')
  let wScroll = $(this).scrollTop();

  if(wScroll>10){
    $('.navbar').addClass("hilang")
    $('.navbar').removeClass("top-0")
  }else{
    $('.navbar').removeClass("hilang")
    $('.navbar').addClass("top-0")
  }

  galeri.addEventListener('click',function(){
    window.scrollTo(0, 70)
  })

  deskripsi.addEventListener('click',function(){
    window.scrollTo(0, 800)
  })

  detail.addEventListener('click',function(){
    window.scrollTo(0, 960)
  })

  ulasan.addEventListener('click',function(){
    window.scrollTo(0, 2050)
  })

  if(wScroll > 10 && wScroll < 650){
    galeri.classList.add('border-bottom', 'border-3', 'border-dark', 'fw-bold')
  }else{
    galeri.classList.remove('border-bottom', 'border-3', 'border-dark', 'fw-bold')
  }

  if(wScroll > 760 && wScroll < 960){
    deskripsi.classList.add('border-bottom', 'border-3', 'border-dark', 'fw-bold')
  }else{
    deskripsi.classList.remove('border-bottom', 'border-3', 'border-dark', 'fw-bold')
  }

  if(wScroll >= 960 && wScroll < 1180){
    detail.classList.add('border-bottom', 'border-3', 'border-dark', 'fw-bold')
  }else{
    detail.classList.remove('border-bottom', 'border-3', 'border-dark', 'fw-bold')
  }

  if(wScroll > 2050 && wScroll < 3000){
    ulasan.classList.add('border-bottom', 'border-3', 'border-dark', 'fw-bold')
  }else{
    ulasan.classList.remove('border-bottom', 'border-3', 'border-dark', 'fw-bold')
  }

  if(wScroll > 750){
    menu.classList.add('position-sticky', 'top-0', 'left-0', 'w-100')
  }else{
    menu.classList.remove('position-sticky', 'top-0', 'left-0', 'w-100')
  }

  if(wScroll > 130){
    sisiKanan.classList.add('position-sticky', 'top-0', 'left-0', 'w-100')
  }else{
  sisiKanan.classList.remove('position-sticky', 'top-0', 'left-0', 'w-100')
  }
})

// const carousel = document.getElementById('carouselExampleIndicators')

// carousel.addEventListener('mouseover', function(){
//   const carouselSepatu = document.querySelectorAll('.carousel-sepatu')
//   let first = true;
//   carouselSepatu.forEach(el => {
//   const img = document.createElement('img');
//   img.setAttribute("src", el.getAttribute("src"));
//   img.setAttribute("type", el.getAttribute("type"));
//   img.setAttribute("data-bs-target", el.getAttribute("data-bs-target"));
//   img.setAttribute("data-bs-slide-to", el.getAttribute("data-bs-slide-to"));
//   img.setAttribute("class", el.getAttribute("class"));
//   if(first == true){
//   img.setAttribute("aria-current", el.getAttribute("aria-current"));
//   first = false;
//   }
//   img.setAttribute("aria-label", el.getAttribute("aria-label"));
//   el.parentNode.replaceChild(img, el);
// });
// })

// carousel.addEventListener('mouseout', function(){
//   const carouselSepatu = document.querySelectorAll('.carousel-sepatu')
//   carouselSepatu.forEach(el => {
//   const button = document.createElement('button');
//   button.setAttribute("src", el.getAttribute("src"));
//   button.setAttribute("type", el.getAttribute("type"));
//   button.setAttribute("data-bs-target", el.getAttribute("data-bs-target"));
//   button.setAttribute("data-bs-slide-to", el.getAttribute("data-bs-slide-to"));
//   button.setAttribute("class", el.getAttribute("class"));
//   button.setAttribute("aria-label", el.getAttribute("aria-label"));
//   el.parentNode.replaceChild(button, el);
//   });
// })


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

const first2 = document.getElementById('first2')
const last2 = document.getElementById('last2')
const back2 = document.getElementById('back2')
const next2 = document.getElementById('next2')

setInterval(() => {
  if(first2.classList.contains('active')){
    back2.classList.add('d-none')
  }else{
    back2.classList.remove('d-none')
  }
  
  if(last2.classList.contains('active')){
    next2.classList.add('d-none')
  }else{
    next2.classList.remove('d-none')
  }
}, 10);
