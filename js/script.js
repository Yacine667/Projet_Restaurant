// ********************************* button to top
//reperer le bouton
var buttontotop = document.getElementById("button-top");
var rootElement = document.documentElement;
//quand on scroll 20px vers le bas on affiche le bouton
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    buttontotop.style.display = "block";
  } else {
    buttontotop.style.display = "none";
  }
}

function topFunction() {
  // document.body.scrollTop = 0;
  // document.documentElement.scrollTop=0;

  // on scroll avec animation
  rootElement.scrollTo({
    top: 0,
    behavior: "smooth",
  });
}
// quand on scroll la page on change la couleur de menu en rajoutant la class stickey a notre header
window.addEventListener("scroll", function () {
  // aller pointer a l'element header de notre page html
  var header = document.querySelector("header");
  header.classList.toggle("stickey", window.scrollY > 0);
});
// en mode smatphone quand on clique sur le menu burger on affiche notre menu
var hamburger = document.querySelector("#menu_bars");
var croix = document.querySelector("#menu_croix");
var navbar = document.querySelector("#menu_buttons_container ul");
var button = document.querySelectorAll(".menu_button");
var change_button = document.querySelector("#menu_bars #ouvrir");
console.log(change_button)

hamburger.addEventListener("click", () => {
  //   hamburger.classList.toggle("desactive");
  navbar.classList.toggle("active");
  button.forEach((button) => button.classList.toggle("actived"));
  console.log(change_button)
  if (change_button.style.display === "none") {
    change_button.style.display = "block";
  } else {
    change_button.style.display = "none";
  }
});

// PARTIE SLIDER PHOTO

const slider = document.querySelector(".slider");
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");
const slides = document.querySelectorAll(".slide");
const slideIcons = document.querySelectorAll(".slide-icon");
const numberOfSlides = slides.length;
var slideNumber = 0;

// fonctionnement du bouton suivant/next
nextBtn.addEventListener("click", () => {
  slides.forEach((slide) => {
    slide.classList.remove("active");
  });
  slideIcons.forEach((slideIcon) => {
    slideIcon.classList.remove("active");
  });

  slideNumber++;

  if (slideNumber > numberOfSlides - 1) {
    slideNumber = 0;
  }

  slides[slideNumber].classList.add("active");
  slideIcons[slideNumber].classList.add("active");
});

//fonctionnement du bouton précédent/prev

prevBtn.addEventListener("click", () => {
  slides.forEach((slide) => {
    slide.classList.remove("active");
  });

  slideIcons.forEach((slideIcon) => {
    slideIcon.classList.remove("active");
  });

  slideNumber--;

  if (slideNumber < 0) {
    slideNumber = numberOfSlides - 1;
  }

  slides[slideNumber].classList.add("active");
  slideIcons[slideNumber].classList.add("active");
});

//fonctionnement slider automatique / autoplay

var playSlider;

var repeater = () => {
  playSlider = setInterval(function () {
    slides.forEach((slide) => {
      slide.classList.remove("active");
    });
    slideIcons.forEach((slideIcon) => {
      slideIcon.classList.remove("active");
    });

    slideNumber++;

    if (slideNumber > numberOfSlides - 1) {
      slideNumber = 0;
    }

    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
  }, 4000);
};

repeater();

//fonctionnement stop du slider au passage de la souris

slider.addEventListener("mouseover", () => {
  clearInterval(playSlider);
});

//reprendre autoplay après le passage de la souris

slider.addEventListener("mouseout", () => {
  repeater();
});

//partie menu de la semaine
var accContainer = document.getElementsByClassName("accordeon-container");
var accTitre = document.getElementsByClassName("accordeon-titre");
for (var i = 0; i < accTitre.length; i++) {
  accTitre[i].addEventListener("click", toggleItem, false);
}
function toggleItem() {
  var itemClass = this.parentNode.className;
  for (var i = 0; i < accContainer.length; i++) {
    accContainer[i].className = "accordeon-container close";
  }
  if (itemClass == "accordeon-container open") {
    this.parentNode.className = "accordeon-container close";
  } else {
    this.parentNode.className = "accordeon-container open";
  }
}

const cards = document.querySelectorAll(".card__inner");

console.log(cards);

cards.forEach(myFlip);

function myFlip(item) {
  item.addEventListener("click", function () {
    item.classList.toggle("is-flipped");
  });
}

// Menu rendez vous choix jour & horaires 



function cache(val) {
  //document.getElementById("sub_menu_select").disabled = true;;
  if (val == "midi") {

    document.getElementsByClassName("midi")[0].style.visibility = "visible"
    var midi = document.getElementById("sub_menu_midi")
    midi.name = 'horaire'
  }

  else
    document.getElementsByClassName("midi")[0].style.visibility = "hidden"

  if (val == "soir") {
    document.getElementsByClassName("soir")[0].style.visibility = "visible"
    var soir = document.getElementById("sub_menu_soir")
    soir.name = "horaire"
  }
  else
    document.getElementsByClassName("soir")[0].style.visibility = "hidden"

}

function hideOpt() {
  // var type =document.getElementById('sub_menu_select')
  // var option = document.querySelectorAll('option')

  console.log('hello')
}

compareValueHour();
function compareValueHour() {
  var opti = document.querySelectorAll('.option');
  console.log(opti);
  var selectHour = document.querySelectorAll('.select_hour');
  console.log(selectHour.length);
  var x = opti.length/selectHour.length;
  console.log(x)
  selectHour.forEach((currentSelect) => {
    console.log(currentSelect.options[0]);
    var i = 1;

    // console.log(currentSelect);
    while (i < x) {
      //  console.log (currentSelect.options[i].text)
      if ((currentSelect.options[i].text) === (currentSelect.options[0].text)) {
        // var selectvalue = (currentSelect.options[currentSelect.selectedIndex].text);
        // selectvalue.style.dispaly = none;
        // opti[i-1].style.display = 'none';
        currentSelect.options[i].setAttribute("selected", "selected");
        
      }
      i++;
    }

  });
}

function compareValueDay() {
  var optiDay = document.querySelectorAll('.optionDay');
  console.log(optiDay)
  var select_day = document.getElementById('select_day')
  var nb_option = select_day.options.length
  console.log(nb_option)
  console.log(select_day.options[0].text)
  console.log(select_day.options[select_day.selectedIndex].text)
  var i = 0;
  while (i++ < nb_option) {
    console.log(select_day.options[i].text)
    if ((select_day.options[i].text) === (select_day.options[select_day.selectedIndex].text)) {
      optiDay[i - 1].setAttribute("selected", "selected");
      console.log(select_day[i].text)
    }
  }
}
compareValueDay()
// cacher le bouton annuler reservation quand le panier est vide
function cacherBtn() {
  console.log('hello word')
  var btn = document.querySelector('.btnsupprimer')
  var alert = document.querySelector('.paniervidealert')
  if (alert.text = 'Aucune reservation en session') {
    btn.style.display = 'none'
  }
  else {
    btn.style.display = 'block'
  }
}
cacherBtn()