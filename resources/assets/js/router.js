
import Main from './components/Home/Main.vue'


export default [
    {
        path: '/home',
        component: Main,
        children: [
            {
                path: '/',
                redirect: '/home/index'
            },
            {
                path: 'home',
                component: require('./components/Home/Main.vue')
            }
        ]

    }
]