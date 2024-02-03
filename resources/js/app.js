import './bootstrap';
import 'bootstrap';
/* require('./script'); */

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
const swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        // when window width is <= 499px
        375: {
            slidesPerView: 1,
            spaceBetweenSlides: 30
        },
        // when window width is <= 999px
        865: {
            slidesPerView: 2,
            spaceBetweenSlides: 40
        },

        1800: {
            slidesPerView: 3,
            spaceBetweenSlides: 40
        },
    }

});




gsap.from('#myCard', {opacity:0, x:-100, duration:1, stagger:0.25})



/* NUMERINI */
function incrementaNumero(target, endValue, duration) {
    let startValue = 0;
    let increment = (endValue - startValue) / (duration * 1000);
    let current = startValue;

    let interval = setInterval(() => {
        current += increment;
        document.getElementById(target).innerText = Math.round(current);

        if (current >= endValue) {
            clearInterval(interval);
            document.getElementById(target).innerText = endValue;
        }
    }, 10);
}
if (document.querySelector('#number1')) {
    let articleCount = document.querySelector('#number1').dataset.counter;
    incrementaNumero('number1', articleCount, 0.2);
    console.log(articleCount); 
}
// Chiamare la funzione con i parametri desiderati

incrementaNumero('number2', 38, 0.5);
incrementaNumero('number3', 6, 0.2);



/* document.addEventListener("DOMContentLoaded", function () {
    const card = document.querySelectorAll.getElementById("myCard");

    const options = {
        root: null,
        rootMargin: "0px",
        threshold: 0.5
    };

    const observer = new IntersectionObserver(handleIntersection, options);

    observer.observe(card);

    function handleIntersection(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                card.style.transform = "translateX(0)"; // Quando la card entra nell'area visibile, spostala al centro
                card.style.opacity = 1; // Rendi la card completamente visibile
            } else {
                card.style.transform = "translateX(-100%)"; // Quando la card esce dall'area visibile, spostala a sinistra
                card.style.opacity = 0; // Rendi la card trasparente
            }
        });
    }
}); */


document.addEventListener('scroll', function () {
    updateProgressBar1();
});

function updateProgressBar1() {
    let idBar1 = document.querySelector('#idBar1')

    let altezzaRilevata = document.documentElement.scrollTop;
    let altezzaTotale = document.documentElement.scrollHeight;
    let altezzaEffettiva = altezzaTotale - document.documentElement.clientHeight;
    let scrollPercent = (altezzaRilevata / altezzaEffettiva) * 100;
    idBar1.style.width = scrollPercent + '%';
}



document.addEventListener('scroll', function () {
    updateProgressBar2();
});

function updateProgressBar2() {
    let idBar2 = document.querySelector('#idBar2')

    let altezzaRilevata = document.documentElement.scrollTop;
    let altezzaTotale = document.documentElement.scrollHeight;
    let altezzaEffettiva = altezzaTotale - document.documentElement.clientHeight;
    let scrollPercent = (altezzaRilevata / altezzaEffettiva) * 100;
    idBar2.style.width = scrollPercent + '%';
}


//TODO I CONTATORIIIIIIII

/* TEST */

let bg = document.querySelector('#bg');
window.addEventListener('scroll',function(){
    let value = this.window.scrollY;
    bg.style.backgroundSize = 100+value*2+"px";
})


/* TRIANGOLO SCROLL DOWN */

document.addEventListener('DOMContentLoaded', function () {
    var scrollDiv = document.getElementById('scrollDiv');

    scrollDiv.addEventListener('click', function () {
        window.scrollBy(0, window.innerHeight); // Scorri in basso di 100vh
    });
});



/* CURSORE */

/* function update(e) {
    var x = e.clientX || e.touches[0].clientX
    var y = e.clientY || e.touches[0].clientY

    document.documentElement.style.setProperty('--cursorX', x + 'px')
    document.documentElement.style.setProperty('--cursorY', y + 'px')
}

document.querySelector('.custom-row')?.addEventListener('mousemove', update);
document.querySelector('.custom-row')?.addEventListener('touchmove', update);

document.querySelector('.custom-row1')?.addEventListener('mousemove', update);
document.querySelector('.custom-row1')?.addEventListener('touchmove', update); */




/* VIDEO */

/* setTimeout(function () {
    var videoFrame = document.getElementById('videoFrame');
    videoFrame.src = 'https://www.youtube.com/embed/IzukjHtPyVY?fs=1&autoplay=1&mute=1&loop=1';
}, 5000);
 */
