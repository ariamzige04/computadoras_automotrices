let btnCompuSeccion=document.querySelectorAll(".btn-computadoras-seccion a"),filtrarCompu=document.querySelectorAll(".filtrarCompu");for(let e=0;e<btnCompuSeccion.length;e++)btnCompuSeccion[e].addEventListener("click",(function(){for(let e=0;e<btnCompuSeccion.length;e++)btnCompuSeccion[e].classList.remove("btn-seleccionado");this.classList.add("btn-seleccionado");let e=this.getAttribute("data-filter");for(let t=0;t<filtrarCompu.length;t++)filtrarCompu[t].classList.remove("btn-seleccionado"),filtrarCompu[t].classList.add("displayNone"),filtrarCompu[t].getAttribute("data-item")!=e&&"all"!=e||filtrarCompu[t].classList.remove("displayNone")}));var pathname=window.location.pathname,search=document.querySelector(".buscar-input input"),ansCompus=document.querySelectorAll(".ansCompus"),forEach=Array.prototype.forEach;search.addEventListener("keyup",(function(e){var t=this.value;forEach.call(ansCompus,(function(e){-1==e.innerHTML.toLowerCase().search(t.toLowerCase())?e.style.display="none":e.style.display="/tienda_en_línea"===pathname?"block":"table-row"}))}),!1),(async()=>{if("loading"in HTMLImageElement.prototype){document.querySelectorAll("img.lazyload").forEach(e=>{e.src=e.dataset.src})}else{await import("https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.0/lazysizes.min.js");lazySizes.init()}})();
//# sourceMappingURL=buscador_filtrar.js.map