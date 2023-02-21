import $ from './jquery'
// import Swiper JS
import Swiper, {Navigation, Pagination, Autoplay} from 'swiper';
// import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

$(function() {
  console.log('hello from home page')
  const swiper = new Swiper('.swiper', {
    spaceBetween: 30,
    slidesPerView: 2,
    modules: [Navigation, Pagination, Autoplay],
    loop: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
})