'use strict';

const $ = require('jquery');

//bootstrap js file
require('bootstrap-sass');


require('../css/main.scss');

//include this on evry page to make sure Promise exists
require('babel-polyfill');

$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});

