require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Import admin-lte-3
require('admin-lte');
require('admin-lte/plugins/jquery/jquery');