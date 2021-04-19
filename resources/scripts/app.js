/**
 * External Dependencies
 */
import 'jquery';
import 'alpinejs';

import Swiper, { Navigation } from 'swiper';

Swiper.use([Navigation]);

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

$(document).ready(() => {
  // console.log('Hello world');

  $(".survey .gform_page_footer").each(function() {
    $(this).find('.gform_next_button').wrap("<div class='gform_next_container'></div>");
    $(this).find('.gform_previous_button').wrap("<div class='gform_prev_container'></div>");
    $(this).find('.gform_button').wrap("<div class='gform_next_container'></div>");
  //console.log(this);
  });

  $(document).on('gform_post_render', function() {
    $(".survey .gform_page_footer").each(function() {
      $(this).find('.gform_next_button').wrap("<div class='gform_next_container'></div>");
      $(this).find('.gform_previous_button').wrap("<div class='gform_prev_container'></div>");
      $(this).find('.gform_button').wrap("<div class='gform_next_container'></div>");
    //console.log(this);
    });
  });

  //console.log(surveyImages);
  $(document).on('gform_page_loaded', function(event, form_id, current_page){
    // code to be trigger when next/previous page is loaded
    
    if(form_id == 3) {
      if(current_page == 1) {
        $('.bg-left').attr("src", surveyImages[0]);
        $('.bg-right').attr("src", surveyImages[1]);
        //console.log(surveyImages[2]);
      }
      if(current_page == 2) {
        $('.bg-left').attr("src", surveyImages[2]);
        $('.bg-right').attr("src", surveyImages[3]);
        //console.log(surveyImages[2]);
      }
      if(current_page == 3) {
        $('.bg-left').attr("src", surveyImages[4]);
        $('.bg-right').attr("src", surveyImages[5]);
        $('<li class="survey-heading">Finding Customers</li>').insertBefore('.gchoice_3_23_1');
        $('<li class="survey-heading">Engaging Customers</li>').insertBefore('.gchoice_3_23_8');
        $('<li class="survey-heading">Operating Your Business</li>').insertBefore('.gchoice_3_23_13');
        //console.log(surveyImages[2]);
      }
      if(current_page == 4) {
        $('.bg-left').attr("src", surveyImages[6]);
        $('.bg-right').attr("src", surveyImages[7]);
        //console.log(surveyImages[2]);
      }
      if(current_page == 5) {
        $('.bg-left').attr("src", surveyImages[8]);
        $('.bg-right').attr("src", surveyImages[9]);
        //console.log(surveyImages[2]);
      }
    }
  });

  const statSwiper = new Swiper('.stats-slider', {
    slidesPerView: 1.3,
    grabCursor: false,
    spaceBetween: 24,
    centeredSlides: true,
    preventClicks: false,
    breakpoints: {
      768: {
        slidesPerView: 2.3,
        centeredSlides: false,
      },
      1024:  {
        slidesPerView: 3,
        allowTouchMove: false,
        centeredSlides: false,
        spaceBetween: 32,
      },
    }
  });

  const storySwiper = new Swiper('.story-slider', {
    slidesPerView: 1.3,
    grabCursor: false,
    spaceBetween: 24,
    centeredSlides: true,
    preventClicks: false,
    navigation: {
      nextEl: '.story-swiper-next',
      prevEl: '.story-swiper-prev',
    },
    breakpoints: {
      768: {
        slidesPerView: 2.3,
        centeredSlides: false,
      },
      1024:  {
        slidesPerView: 3,
        allowTouchMove: false,
        centeredSlides: false,
        spaceBetween: 32,
      },
    }
  });

  $('#copy-link').on('click', function() {
    $('#copy-tooltip').show().delay(1500).fadeOut();
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($('#copied').text()).select();
    document.execCommand("copy");
    $temp.remove();
  });

  $('#resource-cat').on('change', function() {

    var searchParams = new URLSearchParams(window.location.search);

    searchParams.set('content', this.value);

    var url = location.protocol + '//' + location.host + location.pathname + '?' + searchParams.toString();

    window.location.replace( url );
  });
  

});
