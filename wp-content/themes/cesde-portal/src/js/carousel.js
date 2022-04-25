// import Swiper JS
import Swiper, { Pagination,Autoplay,EffectFade,Navigation,Scrollbar } from 'swiper';

// import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';

import 'swiper/css/effect-fade';
import 'swiper/css/autoplay';
import 'swiper/css/scrollbar'

const bannerSlider = document.getElementById('banner-slider')
const calendarHomeWrapper = document.getElementById('calendar-home-wrapper')
const cesde_time_line_container= document.getElementById('cesde_time_line_container')
if(bannerSlider){
    const bannerswiper = new Swiper('#banner-slider', {
        modules: [Pagination,EffectFade,Autoplay],
        pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable:true
        },
       
          loop:true,
        autoplay: {
            delay: 5000,
          },
          effect: 'fade',
          fadeEffect: {
            crossFade: true
          },
      });
}
if(cesde_time_line_container){
     const timeLineSwiper = new Swiper('#cesde_time_line_container',{
      modules: [Navigation],
        navigation: {
          nextEl: '.time-line-next',
          prevEl: '.time-line-prev',
        },
        slidesPerView: 1,
       
        // Responsive breakpoints
        breakpoints: {
          // when window width is >= 320px
        
          0: {
            slidesPerView: 1,
           
          },
          // when window width is >= 640px
          1025: {
            slidesPerView: 2,
            
          }
        }
      })
}

if(calendarHomeWrapper){
  console.log(calendarHomeWrapper)
  const calendarHomeWrapperSwiper = new Swiper('#calendar-home-wrapper',{
    modules: [Scrollbar],
    direction: "vertical",
    slidesPerView: "auto",
    autoHeight:true,
    freeMode: true,
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
    mousewheel: true,
  })
}
