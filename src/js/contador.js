
const counters = document.querySelectorAll('.counter')
counters.forEach(counter => {
  counter.innerText = '0'
  const updateCounter = () => {
    const target = +counter.getAttribute('data-target')
    const c = +counter.innerText
    const increment = target / 200
    if(c < target) {
      counter.innerText = `${Math.ceil(c + increment)}`
      setTimeout(updateCounter, 100)
    } else {
      counter.innerText = target

    }
  }

  //parte aqui

const scrollElements = document.querySelectorAll(".aqui_100");

const elementInView = (el, dividend = 1) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop <=
    (window.innerHeight || document.documentElement.clientHeight) / dividend
  );
};

const elementOutofView = (el) => {
  const elementTop = el.getBoundingClientRect().top;

  return (
    elementTop > (window.innerHeight || document.documentElement.clientHeight)
  );
};

const displayScrollElement = (element) => {
  updateCounter()
  //esto hace que funcione

};

const hideScrollElement = (element) => {
  element.classList.remove("scrolled");
};

const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 1.25)) {
      displayScrollElement(el);
    } else if (elementOutofView(el)) {
      hideScrollElement(el)
    }
  })
}

window.addEventListener("scroll", () => { 
  handleScrollAnimation();
});

})

