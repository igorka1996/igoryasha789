let radio = document.getElementsByName("radio");
let rule = document.getElementsByName("rule");
let stoit = document.querySelector(".stoit");
let sel = document.getElementById('mySelect');
//Расчет стоимости
let itog = 2500;
stoit.innerHTML = itog + `${" руб."}`;
function gey() {
   if (sel[0].selected) {
      cost = 0;
      return cost;
   } else if (sel[1].selected) {
      cost = 0;
      return cost;
   } else if (sel[2].selected) {
      cost = 0;
      return cost;
   } else if (sel[3].selected) {
      cost = 1000;
      return cost;
   } else if (sel[4].selected) {
      cost = 500;
      return cost;
   } else if (sel[5].selected) {
      cost = 1500;
      return cost;
   } else if (sel[6].selected) {
      cost = 2500;
      return cost;
   } else { }
};
document.addEventListener('input', function () { stoit.innerHTML = itog + igor(radio) + nasta(rule) + gey() + `${" руб."}` });
function igor(radio) {
   for (let i = 0; i <= radio.length; i++) {
      if (radio[i].checked) {
         cost = 500 * i;
         return cost;
      };
   };
};
function nasta(rule) {
   for (let i = 0; i <= rule.length; i++) {
      if (rule[i].checked) {
         cost = 1000 * i;
         return cost;
      };
   };
};
window.onscroll = () => {
   const header = document.querySelector(".header");
   const Y = window.scrollY;
   if (Y > 300) {
      header.classList.add("header__fixed")
   } else if (Y < 100) {
      header.classList.remove("header__fixed")
   }
};
//Линия прокрутки страницы
let fullheight = document.body.scrollHeight;
let inerheight = window.innerHeight;
let progrebsrline = document.querySelector('.progresbarline');
window.addEventListener('scroll', progresb);
window.addEventListener('resize', progresb);
function progresb() {
   let fullheight = document.body.scrollHeight;
   let inerheight = window.innerHeight;
   progrebsrline.style.width = (scrollY * 100) / (fullheight - inerheight) + '%';
};
document.querySelectorAll('a.yakor').forEach(link => {
   link.addEventListener('click', function (e) {
      e.preventDefault();
      const href = this.getAttribute('href').substring(1);
      const scrollTarget = document.getElementById(href);
      const topOffset = 120;
      const elementPosition = scrollTarget.getBoundingClientRect().top;
      const offsetPosition = elementPosition - topOffset;
      window.scrollBy({
         top: offsetPosition,
         behavior: 'smooth'
      });
   });
});
//Анмимрованное появление элементов
let animateelems = document.querySelectorAll('.animateelem');
let animationshow = document.querySelectorAll('.animationshow');
if (animateelems.length > 0) {
   window.addEventListener('scroll', anoOnScroll)
   function anoOnScroll() {
      for (index = 0; index < animateelems.length; index++) {
         let animateelem = animateelems[index];
         let animaHeight = animateelem.offsetHeight;
         let aniItemOffset = offsetPos(animateelem).top;
         let animStart = 4;
         let animItemPoint = window.innerHeight - animaHeight / animStart;
         if (animaHeight > window.innerHeight) {
            animItemPoint = window.innerHeight - window.innerHeight / animStart;
         }
         if ((scrollY > aniItemOffset - animItemPoint) && scrollY < (aniItemOffset + animaHeight)) {
            animateelem.classList.add('animationshow');
         }
      }
   }
};
function offsetPos(e) {
   let rect = e.getBoundingClientRect();
   scrollLeft = window.scrollY || document.documentElement.scrollLeft,
      scrollTop = window.scrollY || document.documentElement.scrollTop;
   return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
}
//Маска для ввода номера телефона
window.addEventListener("DOMContentLoaded", function () {
   [].forEach.call(document.querySelectorAll('.tel'), function (input) {
      var keyCode;
      function mask(event) {
         event.keyCode && (keyCode = event.keyCode);
         var pos = this.selectionStart;
         if (pos < 3) event.preventDefault();
         var matrix = "+7 (___) ___ - __ -__",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, ""),
            new_value = matrix.replace(/[_\d]/g, function (a) {
               return i < val.length ? val.charAt(i++) || def.charAt(i) : a
            });
         i = new_value.indexOf("_");
         if (i != -1) {
            i < 5 && (i = 3);
            new_value = new_value.slice(0, i)
         }
         var reg = matrix.substr(0, this.value.length).replace(/_+/g,
            function (a) {
               return "\\d{1," + a.length + "}"
            }).replace(/[+()]/g, "\\$&");
         reg = new RegExp("^" + reg + "$");
         if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
         if (event.type == "blur" && this.value.length < 5) this.value = ""
      }
      input.addEventListener("input", mask, false);
      input.addEventListener("focus", mask, false);
      input.addEventListener("blur", mask, false);
      input.addEventListener("keydown", mask, false)
   });
});
let chasi = document.querySelector('.chasi');
let minutes = document.querySelector('.minutes');
let seconds = document.querySelector('.second');
let time = 54000;
setInterval(timer, 1000);
function timer() {
   let minute = Math.floor((time / 60) % 60);
   let chas = Math.floor((time / 3600) % 24);
   let second = time % 60;
   second = second < 10 ? "0" + second : second;
   minute = minute < 10 ? "0" + minute : minute;
   chas = chas < 10 ? "0" + chas : chas;
   chasi.innerHTML = chas;
   minutes.innerHTML = minute;
   seconds.innerHTML = second;
   time--;
};
let burger = document.querySelector('.burger');
let active = document.querySelector('.active');
let spanik = document.querySelector('.spanik');
let nav = document.querySelector('.nav');
let superactive = document.querySelector('.superactive');
let pidor = document.querySelector('.pidor');
document.addEventListener("click", documentActions);
function documentActions(e) {
   let target = e.target;
   if (target.classList.contains('pidor')) {
      nav.classList.toggle('superactive');
      burger.classList.toggle('active');
      spanik.classList.toggle('fuck');
   };
   if (!target.classList.contains('link') && !target.classList.contains('pidor')) {
      nav.classList.remove('superactive');
      burger.classList.remove('active');
      spanik.classList.remove('fuck');
   };
};
window.addEventListener('resize',
   function pedormot() {
      if (window.innerWidth <= 600) {
         document.querySelector('.fa-envelope').classList.remove('fa-8x');
         document.querySelector('.fa-whatsapp-square').classList.remove('fa-8x');
         document.querySelector('.fa-telegram').classList.remove('fa-8x');
      } else {
         document.querySelector('.fa-envelope').classList.add('fa-8x');
         document.querySelector('.fa-whatsapp-square').classList.add('fa-8x');
         document.querySelector('.fa-telegram').classList.add('fa-8x');
      };
   });
if (window.innerWidth <= 600) {
   document.querySelector('.fa-envelope').classList.remove('fa-8x');
   document.querySelector('.fa-whatsapp-square').classList.remove('fa-8x');
   document.querySelector('.fa-telegram').classList.remove('fa-8x');
} else {
   document.querySelector('.fa-envelope').classList.add('fa-8x');
   document.querySelector('.fa-whatsapp-square').classList.add('fa-8x');
   document.querySelector('.fa-telegram').classList.add('fa-8x');
};


let iconochka = document.querySelector('.fa-times-circle');
iconochka.addEventListener('click', function () {
   document.querySelector('.zatm').classList.add('her');
});















