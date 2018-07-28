// import external dependencies
import 'jquery';
import 'owl.carousel/dist/owl.carousel.min.js';
import 'unslider/src/js/unslider.js';
import 'isotope-layout/dist/isotope.pkgd.min.js';
import 'jquery-background-video/jquery.background-video.js';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import pagePortfolio from './routes/pagePortfolio';
import pagePortal from './routes/pagePortal';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  pagePortfolio,
  pagePortal,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
