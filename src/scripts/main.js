import $ from 'jquery';
window.$ = window.jQuery = $;
import 'bootstrap/dist/js/bootstrap';


$(document).ready(function(){
  var title = $("title").text();
  console.log(title + " is ready.");

  //$('.collapse').collapse();

  var swiper = new Swiper('.JS--packages-slider.swiper-container',{
    slidesPerView:3,
    //spaceBetween:50,
  });

  var swiper = new Swiper('.JS--portfolio-slider.swiper-container',{
    slidesPerView:3,
    loop:true,
    navigation: {
      nextEl: '.JS--portfolio-next',
      prevEl: '.JS--portfolio-prev',
    },
    pagination: {
      el: '.JS--portfolio-pagination',
      clickable: true,
    },

  });

  var swiper = new Swiper('.JS--feedback-slider.swiper-container',{
    slidesPerView:3,
    loop:true,
    navigation: {
      nextEl: '.JS--feedback-next',
      prevEl: '.JS--feedback-prev',
    },
    pagination: {
      el: '.JS--feedback-pagination',
      clickable: true,
    },

  });


});
