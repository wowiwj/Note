// 后台管理 的 js


require('./bootstrap');


import VueRouter from 'vue-router';
import App from './components/Home.vue';    // 路由挂载
import Routers from './router.js';       // 路由列表
import iView from 'iview';
import 'iview/dist/styles/iview.css';    // 使用 CSS

Vue.use(VueRouter);
Vue.use(iView);

// 路由配置
const RouterConfig = {
    routes: Routers
};
const router = new VueRouter(RouterConfig);

new Vue({
    router: router,
    render: h => h(App)
}).$mount('#app');