const dropdown = document.querySelectorAll('#dropdown-navbar');

dropdown.forEach(el => {
  el.addEventListener("mouseover", function(e){
    el.nextElementSibling.classList.toggle("d-none")
    el.classList.add("border-bottom","border-dark", "border-3")
  })
  el.addEventListener("mouseout", function(e){
    el.nextElementSibling.classList.toggle("d-none")
    el.classList.remove("border-bottom", "border-dark", "border-3")
  })
  el.nextElementSibling.addEventListener("mouseover", function(e){
    el.nextElementSibling.classList.toggle("d-none")
    el.classList.add("border-bottom","border-dark", "border-3")
  })
  el.nextElementSibling.addEventListener("mouseout", function(e){
    el.nextElementSibling.classList.toggle("d-none")
    el.classList.remove("border-bottom", "border-dark", "border-3")
  })
});


// wishlist
const wishlist = document.querySelectorAll('.wishlist')

wishlist.forEach(el => {
  el.addEventListener('click', function(){
    if(el.children[0].name == 'heart-outline'){
      el.children[0].name = 'heart'
    }else{
      el.children[0].name = 'heart-outline'
    }
  })
});

// border dropdown
const dropdownBorder = document.querySelectorAll('#dropdown-border')

dropdownBorder.forEach(el => {
  el.addEventListener('click',function(){
    el.classList.toggle('border-0')
    el.classList.add('border', 'border-1', 'border-dark')
    console.log(el)
  })
  el.addEventListener('blur',function(){
    el.classList.add('border-0')
    el.classList.remove('border', 'border-1', 'border-dark')
  })
});

// produk
const produk = document.querySelectorAll("#produk")

produk.forEach(el => {
  const carouselproduk = el.getElementsByTagName("div")[2]
  const gambarproduk = el.getElementsByTagName("img")[0]
  const gambars = carouselproduk.getElementsByTagName("img")
  const gambar = Array.from(gambars)

  el.addEventListener('mouseover', function(){
    if(carouselproduk.id == "image-produk"){
      carouselproduk.classList.remove('d-none')
      gambar.forEach(ga => {
        ga.addEventListener('click', function(){
          gambarproduk.src = ga.src
        })
        if(gambarproduk.src == ga.src){
          ga.classList.add('border-bottom', 'border-dark', 'border-2')
        }else{
          ga.classList.remove('border-bottom', 'border-dark', 'border-2')
        }
      })
    }
  })
  el.addEventListener('mouseout', function(){
    if(carouselproduk.id == "image-produk"){
      carouselproduk.classList.add('d-none')
    }
  })
});