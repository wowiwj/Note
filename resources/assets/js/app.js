
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */



window.Vue = require('vue');

require('./bootstrap');

require('./libs');

var VueQuillEditor = require('vue-quill-editor');

Vue.use(VueQuillEditor);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example1', require('./components/Example.vue'));
Vue.component('flash', require('./components/Flash.vue'));
Vue.component('ArticleEditor', require('./components/ArticleEditor.vue'));
Vue.component('ArticleMdEditor', require('./components/ArticleMdEditor.vue'));
Vue.component('parse', require('./components/Parse.vue'));
Vue.component('ArticleInfo', require('./components/ArticleInfo.vue'));


window.marked = require('marked');


const app = new Vue({
    el: '#app'
});
