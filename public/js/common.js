if (document.querySelector('body').classList.contains('mainPage') || document.querySelector('.reviews')) {


  // slider
  $('.header__slider').slick({
    fade: true,
    prevArrow: '<button class="header__prev"> <i class="fas fa-chevron-left"></i> </button>',
    nextArrow: '<button class="header__next"> <i class="fas fa-chevron-right"></i> </button>',
    autoplay: true,
    autoplaySpeed: 5000,
  })
  $('.packages__slider').slick({
    centerPadding: '40px',
    slidesToShow: 2,
    slidesToScroll: 1,
    infinite: true,
    centerMode: true,
    prevArrow: '<button class="packages__prev"> <i class="fas fa-chevron-left"></i> </button>',
    nextArrow: '<button class="packages__next"> <i class="fas fa-chevron-right"></i> </button>',
    variableWidth: true
  })
  $('.reviews__slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    dots: true,
    dotsClass: 'reviews__dots',
    arrows: false,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,

        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,

        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  })
  $('.news__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    dotsClass: 'news__dots',
    arrows: false,

  })
  //header
  let flag = true
  $(window).scroll(function () {
    let block = $('.header__nav');
    let header = $('.header')

    if (flag === true) {
      if ($(window).scrollTop() > +block.height() + 20) {
        block.addClass('fixed');
        header.addClass('fixed');
      } else {
        block.removeClass('fixed');
        header.removeClass('fixed');
      }
    }

  });

  // tabs
  function tabs(tabs, content, classtabs, classContent) {
    let menuItems = document.querySelectorAll(tabs)
    let contentItems = document.querySelectorAll(content)

    for (let i = 0; i < menuItems.length; i++) {
      let menuItem = menuItems[i];
      let contentItem = contentItems[i];
      menuItem.onclick = function () {
        for (let j = 0; j < menuItems.length; j++) {
          menuItems[j].classList.remove(classtabs);
          contentItems[j].classList.remove(classContent);
        }
        menuItem.classList.add(classtabs);
        contentItem.classList.add(classContent);
      }
    }
  }
  tabs('.startaps__tab', '.startaps__content', 'startaps__tab-active', 'startaps__content-active')
  tabs('.modal__tab', '.modal__content', 'modal__tab-active', 'modal__content-active')

  // calculator
  let inputs = document.querySelectorAll('#modal__input')
  let proc = document.querySelectorAll('#procent')
  let sum = document.querySelectorAll('#sum')
  for (let i = 0; i < inputs.length; i++) {
    inputs[i].oninput = () => {
      if (inputs[i].length >= 6) {
        alert(1)
        return ''
      }
      else if (i == 0) {
        let money = (inputs[i].value * 0.012).toFixed(4)

        proc[i].innerHTML = money
        sum[i].innerHTML = (+inputs[i].value + +money).toFixed(4)
      }
      else if (i == 1) {
        let money = (((inputs[i].value * (1.012 ** 7))) * 1.0034).toFixed(4)
        proc[i].innerHTML = (money - +inputs[i].value).toFixed(4)
        sum[i].innerHTML = money
      }
      else if (i == 2) {

        let money = (((inputs[i].value * (1.012 ** 14))) * 1.0084).toFixed(4)
        proc[i].innerHTML = (money - +inputs[i].value).toFixed(4)
        sum[i].innerHTML = money
      }
      else if (i == 3) {
        let money = (((inputs[i].value * (1.012 ** 30))) * 1.0154).toFixed(4)
        proc[i].innerHTML = (money - +inputs[i].value).toFixed(4)
        sum[i].innerHTML = money
      }
    }
  }
  $(function () {
    $("a[href^='#']").click(function () {
      var _href = $(this).attr("href");
      $("html, body").animate({ scrollTop: $(_href).offset().top + "px" });
      return false;
    })
  });

  $(() => {
    setTimeout(() => $('.page-preloader').addClass('done'), 2000)
    setTimeout(() => {
      $('#widget-text').css({ 'opacity': 1 })
    }, 40000)
  });


}

let aside = document.querySelector('.aside__nav')

$('#menu').on('click', toggleMenu)
$('.exit').on('click', toggleMenu)
$('.aside__nav').on('click', (e) => {
  if (e.target.classList.contains('aside__nav')) {
    toggleMenu()
    flag = true
  }
})
$('.aside__nav a').on('click', (e) => {
  toggleMenu()
  flag = true
})
document.querySelector('.about__wrap-mobile').onclick = () => {
  document.querySelector('.about__wrap-mobile').classList.toggle('done')
}
function toggleMenu() {
  aside.classList.toggle('visible')
}
