
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

import Buefy from 'buefy';
Vue.use(Buefy,{
    defaultIconPack: 'fas'
});


Vue.prototype.authorize = function(hander){
    let user = window.App.user;

    return user ? hander(user) : false;

};


require('./global');


require('social-share.js/dist/js/social-share.min.js');
require('particles.js');

require('./libs/prism');

require ('./libs/jquery.sticky');


require('./navbar');




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example1', require('./components/Example.vue'));
Vue.component('flash', require('./components/Flash.vue'));
Vue.component('parse', require('./components/Parse.vue'));
Vue.component('ArticleView',require('./pages/Article.vue'));
Vue.component('DiscussionView',require('./pages/Discussion.vue'));
Vue.component('Paginator',require('./components/Paginator.vue'));
Vue.component('Comments',require('./components/Comments.vue'));
Vue.component('UploadAvatar',require('./components/UpdateAvatar.vue'));
Vue.component('PageMdEditor',require('./components/PageMdEditor.vue'));
Vue.component('LoginView',require('./components/LoginView.vue'))
Vue.component('MarkdownEditor',require('./components/MarkdownEditor.vue'))
Vue.component('ArticleDraftEditor',require('./components/ArticleDraftEdit.vue'))
Vue.component('DiscussionDraftEditor',require('./components/DiscussionDraftEdit.vue'))
Vue.component('ArticleArchive',require('./components/ArticleArchive.vue'));


window.marked = require('marked');


const app = new Vue({
    el: '#app'
});




