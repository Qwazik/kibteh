import Vue from 'vue'
import Router from 'vue-router'
import Personal from './views/Personal.vue'
import KeysList from './views/KeysList.vue'
import KeysSend from './views/KeysSend.vue'
import Balance from './views/Balance.vue'
import NotFound from './views/NotFound.vue'
import Login from './views/Login.vue'

Vue.use(Router);

export default new Router({
    mode: 'history',
    base: process.env.NODE_ENV === 'production' ? '/account/' : process.env.BASE_URL,
    routes: [
        {
            path: '/',
            name: 'login',
            component: Login
        },
        {
            path: '/home',
            name: 'home',
            component: Personal
        },
        {
            path: '/keys-list',
            name: 'Список ключей',
            component: KeysList
        },
        {
            path: '/keys-send',
            name: 'Отправленные ключи',
            component: KeysSend
        },
        {
            path: '/balance',
            name: 'Баланс',
            component: Balance
        },
        {
            path: '*',
            component: NotFound
        }
    ]
})
