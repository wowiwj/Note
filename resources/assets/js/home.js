// 后台管理 的 js


require('./bootstrap');


import Buefy from 'buefy';
Vue.use(Buefy);


Vue.component('Menus',require('./components/home/Menus.vue'));
Vue.component('MenuItem',require('./components/home/MenuItem.vue'));



const app = new Vue({
    el: '#app'
});


document.addEventListener('DOMContentLoaded', function () {

    // Get all "navbar-burger" elements
    var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {

        // Add a click event on each of them
        $navbarBurgers.forEach(function ($el) {
            $el.addEventListener('click', function () {

                // Get the target from the "data-target" attribute
                var target = $el.dataset.target;
                var $target = document.getElementById(target);

                // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                $el.classList.toggle('is-active');
                $target.classList.toggle('is-active');

            });
        });
    }

});

$(document).ready(function() {

    //Menu
    // if ($('.menu .menu-list a').hasClass('is-active')){
    //
    //     $('.menu .menu-list li ul').show();
    // }else{
    //     $('.menu .menu-list li ul').hide();
    // }

//
//
//     //  Dropdowns
//     $('.dropdown').hover(function(e) {
//         $(this).toggleClass('is-open')
//     })
})