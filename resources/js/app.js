import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Import admin-lte-3
import 'admin-lte';
import 'admin-lte/plugins/jquery/jquery';
import '../sass/app.scss';

// nav-item
var url = window.location;

const allLinks = document.querySelectorAll('.nav-item a');
const currentLink = [...allLinks].filter(e => {
    return e.href == url;
});

if (currentLink.length > 0) {
    currentLink[0].classList.add("active");
    currentLink[0].closest(".nav-treeview").style.display = "block";
    currentLink[0].closest(".has-treeview").classList.add("active");
}



