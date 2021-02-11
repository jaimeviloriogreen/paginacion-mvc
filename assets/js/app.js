'use strict'

const li = document.querySelectorAll('.pageNumber');
for(let i of li){
   i.addEventListener('mouseover', ()=>{
    i.classList.add('cursorPoint');
   });
}
