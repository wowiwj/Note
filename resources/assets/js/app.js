
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



require('./bootstrap');

import Buefy from 'buefy';
Vue.use(Buefy,{
    defaultIconPack: 'fa'
});


Vue.prototype.authorize = function(hander){
    let user = window.App.user;

    return user ? hander(user) : false;

};

require('./global');


require('social-share.js/dist/js/social-share.min.js');

require('./libs/prism');

require ('./libs/jquery.sticky');




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example1', require('./components/Example.vue'));
Vue.component('flash', require('./components/Flash.vue'));
Vue.component('ArticleMdEditor', require('./components/ArticleMdEditor.vue'));
Vue.component('parse', require('./components/Parse.vue'));
Vue.component('ArticleView',require('./pages/Article.vue'));
Vue.component('Paginator',require('./components/Paginator.vue'));
Vue.component('Comments',require('./components/Comments.vue'));
Vue.component('UploadAvatar',require('./components/UpdateAvatar.vue'));
Vue.component('PageMdEditor',require('./components/PageMdEditor.vue'));
Vue.component('LoginView',require('./components/LoginView.vue'))



window.marked = require('marked');


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


