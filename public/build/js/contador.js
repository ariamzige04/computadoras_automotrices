const counters=document.querySelectorAll(".counter");counters.forEach(e=>{e.innerText="0";const t=()=>{const n=+e.getAttribute("data-target"),o=+e.innerText,i=n/200;o<n?(e.innerText=""+Math.ceil(o+i),setTimeout(t,100)):e.innerText=n},n=document.querySelectorAll(".aqui_100"),o=()=>{n.forEach(e=>{((e,t=1)=>e.getBoundingClientRect().top<=(window.innerHeight||document.documentElement.clientHeight)/t)(e,1.25)?t():(e=>e.getBoundingClientRect().top>(window.innerHeight||document.documentElement.clientHeight))(e)&&e.classList.remove("scrolled")})};window.addEventListener("scroll",()=>{o()})});
//# sourceMappingURL=contador.js.map