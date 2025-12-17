import "../styles/main.scss";
import "./main.js";

// Import Swiper and modules
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay, Thumbs } from 'swiper/modules';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// Export Swiper for use in other scripts
window.Swiper = Swiper;
window.SwiperModules = { Navigation, Pagination, Autoplay, Thumbs };

// Import Swiper initialization
import './swiper.js';

// Import Accordion
import './accordion.js';