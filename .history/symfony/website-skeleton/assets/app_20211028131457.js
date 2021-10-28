/*
* Welcome to your app's main JavaScript file!
*
* We recommend including the built version of this JavaScript file
* (and its CSS file) in your base layout (base.html.twig).
*/
const $ = require('jquery');
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require('bootstrap');

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';
import './styles/home.scss';
import './styles/portfolio.scss';
// import './styles/actus.scss';
import bsCustomFileInput from 'bs-custom-file-input';
import '@fortawesome/fontawesome-free/css/all.css';

// start the Stimulus application
// import './bootstrap';

// MDBbootstrap
import * as mdb from 'mdb-ui-kit'; // lib
import { Input } from 'mdb-ui-kit'; // module

bsCustomFileInput.init();


// or you can include specific pieces
// require('bootstrap/js/dist/tooltip');
// require('bootstrap/js/dist/popover');

$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});