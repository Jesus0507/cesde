// import Swiper JS
import Swiper, { Pagination,Autoplay,EffectFade,Navigation,Scrollbar } from 'swiper';
import SimpleBar from 'simplebar'; // or "import SimpleBar from 'simplebar';" if you want to use it manually.
import 'simplebar/dist/simplebar.css';
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
if(document.getElementById('sedes-swiper')){
  const sedesHomeSwiper = new Swiper('#sedes-swiper',{
    modules: [Navigation],
      navigation: {
        nextEl: '.sedes-button-next',
        prevEl: '.sedes-button-prev',
      },
      slidesPerView: 5,
     
      // Responsive breakpoints
      breakpoints: {
        // when window width is >= 320px
      
        0: {
          slidesPerView: 1,
         
        },
        768:{
          slidesPerView: 2,
        },
        991:{
          slidesPerView: 3,
        },
        // when window width is >= 640px
        1020: {
          slidesPerView: 4,
          
        },
        1200: {
          slidesPerView: 5,
          
        }
      }
    })
}

if(calendarHomeWrapper){
  const calendarSimpleScroll = new SimpleBar(document.getElementById('calender-home-content'),{
    autoHide: false,
    forceVisible:'y',
    ariaLabel: 'Calendario cesde' 
  });
}
