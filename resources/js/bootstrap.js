
import $ from 'jquery';
import jQuery from 'jquery';

window.$ = $;
window.jQuery = jQuery;


//import _ from 'lodash';
//window._ = _;

import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

import DataTable from 'datatables.net-bs5';
window.DataTable = DataTable;
import languageUk from 'datatables.net-plugins/i18n/uk.json';
window.languageUk = languageUk;
import 'datatables.net-buttons';
import 'datatables.net-rowgroup';
//import 'datatables.net-fixedheader';

//import 'datatables.net-buttons-bs5';
import JSZip from 'jszip';
window.JSZip = JSZip;
import 'datatables.net-buttons/js/buttons.html5';

//import 'bootstrap-select';
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

