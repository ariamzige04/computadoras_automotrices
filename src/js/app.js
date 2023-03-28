const hamburguesa = document.querySelector("#hamburguesa");
const pantallaCompleta = document.querySelector(".pantallaCompleta");
const activarPantallaNegra = document.querySelector(".activarPantallaNegra");
const body = document.querySelector(".body");

navegacion = document.querySelector(".nav");
hamburguesa.addEventListener("click", () => {
    navegacion.classList.toggle("muestra");
    hamburguesa.classList.toggle("open");
    pantallaCompleta.classList.toggle("activarPantallaNegra");
    body.classList.toggle("fijar-body");

});

const menuBtn = document.querySelector(".menu-btn");

menuBtn.addEventListener("click", () => {
  menuBtn.classList.toggle("open");
    
})

pantallaCompleta.addEventListener("click", () => {
  pantallaCompleta.classList.remove("activarPantallaNegra");
  navegacion.classList.remove("muestra");
  hamburguesa.classList.remove("open");
  menuBtn.classList.remove("open");
  body.classList.remove("fijar-body");

});

window.addEventListener("load",()=>{
  const e=document.querySelector(".loader");
  e.style.opacity=0,
  e.style.visibility="hidden",
  body.classList.remove("fijar-body")

  
  setTimeout(function(){
    
    AOS.init();
}, 1000);
});




