
// //Buscador de admin tabla
// (function(document) {
//     'use strict';

//     var LightTableFilter = (function(Arr) {

//       var _input;

//       function _onInputEvent(e) {
//         _input = e.target;
//         var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
//         Arr.forEach.call(tables, function(table) {
//           Arr.forEach.call(table.tBodies, function(tbody) {
//             Arr.forEach.call(tbody.rows, _filter);
//           });
//         });
//       }

//       function _filter(row) {
//         var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
//         row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
//       }

//       return {
//         init: function() {
//           var inputs = document.getElementsByClassName('light-table-filter');
//           Arr.forEach.call(inputs, function(input) {
//             input.oninput = _onInputEvent;
//           });
//         }
//       };
//     })(Array.prototype);

//     document.addEventListener('readystatechange', function() {
//       if (document.readyState === 'complete') {
//         LightTableFilter.init();
//       }
//     });

//   })(document);




//Botones para filtrar las comptadoras
let btnCompuSeccion = document.querySelectorAll('.btn-computadoras-seccion a');
let filtrarCompu = document.querySelectorAll('.filtrarCompu');



for(let i = 0; i<btnCompuSeccion.length; i++){
    btnCompuSeccion[i].addEventListener('click', function(){
        for(let j = 0; j<btnCompuSeccion.length; j++){
            btnCompuSeccion[j].classList.remove('btn-seleccionado');
        }
        this.classList.add('btn-seleccionado');

        let dataFilter = this.getAttribute('data-filter');

        for(let k = 0; k<filtrarCompu.length; k++){
            filtrarCompu[k].classList.remove('btn-seleccionado');
            filtrarCompu[k].classList.add('displayNone');

            if(filtrarCompu[k].getAttribute('data-item') == dataFilter || dataFilter == "all"){
                filtrarCompu[k].classList.remove('displayNone');
                // filtrarCompu[k].classList.add('btn-seleccionado');
            }
        }
    })
}

  //buscador pagina de computadora 
var pathname = window.location.pathname;

var search = document.querySelector(".buscar-input input"),
ansCompus = document.querySelectorAll(".ansCompus"),
forEach = Array.prototype.forEach;

search.addEventListener("keyup", function(e){
  var choice = this.value;

  forEach.call(ansCompus, function(f){
      if (f.innerHTML.toLowerCase().search(choice.toLowerCase()) == -1)
          f.style.display = "none";        
      else
      if(pathname === "/tienda_en_línea"){
        f.style.display = "block";        

      } else {
        f.style.display = "table-row";        

      }
  });
}, false);

// alert(pathname);
// var search2 = document.querySelector(".tabla input"),
// ansCompus2 = document.querySelectorAll(".ansCompus2"),
// forEach = Array.prototype.forEach;

// search2.addEventListener("keyup", function(e){
//   var choice = this.value;

//   forEach.call(ansCompus, function(f){
//       if (f.innerHTML.toLowerCase().search(choice.toLowerCase()) == -1)
//           f.style.display = "none";        
//       else
//           f.style.display = "table-row";        
//   });
// }, false);


//iMAGENS LAZY LOADER 


(async () => {
    if ("loading" in HTMLImageElement.prototype) {
      const images = document.querySelectorAll("img.lazyload");
      images.forEach((img) => {
        img.src = img.dataset.src;
      });
    } else {
      // Importamos dinámicamente la libreria `lazysizes`
      const lazySizesLib = await import("https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.2.0/lazysizes.min.js");
      // Se inicia lazysizes (lee el atributo `data-src` y la clase `lazyload`)
      lazySizes.init();
    }
  })();

