'use strict';

import $ from 'jquery';

//bootstrap js file
import 'bootstrap-sass';


import '../css/main.scss';

//include this on evry page to make sure Promise exists
import 'babel-polyfill';

$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});

