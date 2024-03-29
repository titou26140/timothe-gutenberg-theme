// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import './util/navbar';
import common from './routes/common';
import home from './routes/home';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
    common,
  // Home page
    home,
});

// Load Events
document.addEventListener('DOMContentLoaded', () => routes.loadEvents());
