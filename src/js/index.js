import "../styles/main.scss";
import "./main.js";

// Import Swiper and modules
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Export Swiper for use in main.js
window.Swiper = Swiper;
window.SwiperModules = { Navigation, Pagination, Autoplay };

// Import Swiper initialization
import './swiper.js';