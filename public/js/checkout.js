const alamat = document.querySelectorAll('.alamat');

alamat.forEach(el => {  
  el.addEventListener('click',function(){
    alamat.forEach(ele => {
      ele.classList.remove('bg-grey')
    });
    el.classList.add('bg-grey')
  })
});