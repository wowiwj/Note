
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



require('./bootstrap');

import Buefy from 'buefy';
Vue.use(Buefy);

// try {
//     require('bootstrap-sass');
// } catch (e) {}


Vue.prototype.authorize = function(hander){
    let user = window.App.user;

    return user ? hander(user) : false;

};



require('./libs/prism');

require ('./libs/jquery.sticky');


// var VueQuillEditor = require('vue-quill-editor');
//
// Vue.use(VueQuillEditor);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example1', require('./components/Example.vue'));
Vue.component('flash', require('./components/Flash.vue'));
Vue.component('ArticleEditor', require('./components/ArticleEditor.vue'));
Vue.component('ArticleMdEditor', require('./components/ArticleMdEditor.vue'));
Vue.component('parse', require('./components/Parse.vue'));
Vue.component('ArticleInfo', require('./components/ArticleInfo.vue'));
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


// $(document).ready(function() {  
//     $("div").bind('click', function(event) {  
//         // alert('外层的div被点击了!');  
//     });  
//     $("div").bind('click', function(event) {  
//         // alert('里面的a点击，但是不想触发外面那个div的事件。');  
//         event.stopPropagation();  
//     });  
// }); 
