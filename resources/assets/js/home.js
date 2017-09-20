// 后台管理 的 js


require('./bootstrap');


import Buefy from 'buefy';
Vue.use(Buefy);


Vue.component('Menus',require('./components/home/Menus.vue'));
Vue.component('MenuItem',require('./components/home/MenuItem.vue'));



const app = new Vue({
    el: '#app'
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