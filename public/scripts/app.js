(self.webpackChunk=self.webpackChunk||[]).push([[742],{839:function(e,r,t){"use strict";t(609),t(443);var s=t(845),i=t(186),n=t(358),o=t(82),a=t(127),c=t(609);s.Z.use([i.Z]),n.p8.registerPlugin(o.i,a.L),c(document).ready((function(){c(".survey .gform_page_footer").each((function(){c(this).find(".gform_next_button").wrap("<div class='gform_next_container'></div>"),c(this).find(".gform_previous_button").wrap("<div class='gform_prev_container'></div>"),c(this).find(".gform_button").wrap("<div class='gform_next_container'></div>")})),c(document).on("gform_post_render",(function(){c(".survey .gform_page_footer").each((function(){c(this).find(".gform_next_button").wrap("<div class='gform_next_container'></div>"),c(this).find(".gform_previous_button").wrap("<div class='gform_prev_container'></div>"),c(this).find(".gform_button").wrap("<div class='gform_next_container'></div>")}))})),c(document).on("gform_page_loaded",(function(e,r,t){3==r&&(1==t&&(c(".bg-left").attr("src",surveyImages[0]),c(".bg-right").attr("src",surveyImages[1])),2==t&&(c(".bg-left").attr("src",surveyImages[2]),c(".bg-right").attr("src",surveyImages[3])),3==t&&(c(".bg-left").attr("src",surveyImages[4]),c(".bg-right").attr("src",surveyImages[5]),c('<li class="survey-heading">Finding Customers</li>').insertBefore(".gchoice_3_23_1"),c('<li class="survey-heading">Engaging Customers</li>').insertBefore(".gchoice_3_23_8"),c('<li class="survey-heading">Operating Your Business</li>').insertBefore(".gchoice_3_23_13")),4==t&&(c(".bg-left").attr("src",surveyImages[6]),c(".bg-right").attr("src",surveyImages[7])),5==t&&(c(".bg-left").attr("src",surveyImages[8]),c(".bg-right").attr("src",surveyImages[9])))}));new s.Z(".stats-slider",{slidesPerView:1.3,grabCursor:!1,spaceBetween:24,centeredSlides:!0,preventClicks:!1,breakpoints:{768:{slidesPerView:2.3,centeredSlides:!1},1024:{slidesPerView:3,allowTouchMove:!1,centeredSlides:!1,spaceBetween:32}}}),new s.Z(".story-slider",{slidesPerView:1.3,grabCursor:!1,spaceBetween:24,centeredSlides:!0,preventClicks:!1,navigation:{nextEl:".story-swiper-next",prevEl:".story-swiper-prev"},breakpoints:{768:{slidesPerView:2.3,centeredSlides:!1},1024:{slidesPerView:3,allowTouchMove:!1,centeredSlides:!1,spaceBetween:32}}});c("#copy-link").on("click",(function(){c("#copy-tooltip").show().delay(1500).fadeOut();var e=c("<input>");c("body").append(e),e.val(c("#copied").text()).select(),document.execCommand("copy"),e.remove()})),c("#resource-cat").on("change",(function(){var e=new URLSearchParams(window.location.search);e.set("content",this.value);var r=location.protocol+"//"+location.host+location.pathname+"?"+e.toString();window.location.replace(r)}))}))},255:function(){},88:function(){},609:function(e){"use strict";e.exports=window.jQuery}},0,[[839,546,941],[255,546,941],[88,546,941]]]);
//# sourceMappingURL=app.js.map