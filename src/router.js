import Vue from 'vue'
import Router from 'vue-router'
import Personal from './views/Personal.vue'
import KeysList from './views/KeysList.vue'
import KeysSend from './views/KeysSend.vue'
import Balance from './views/Balance.vue'
import NotFound from './views/NotFound.vue'
import Login from './views/Login.vue'
import store from './store'

Vue.use(Router);

let router =  new Router({
    mode: 'history',
    base: process.env.NODE_ENV === 'production' ? '/account/' : process.env.BASE_URL,
    routes: [
        {
            path: '/',
            name: 'login',
            component: Login,
            meta: {
                isAuthenticated: false
            }
        },
        {
            path: '/home',
            name: 'home',
            component: Personal,
            meta: {
                isAuthenticated: true
            }
        },
        {
            path: '/keys-list',
            name: 'Список ключей',
            component: KeysList,
            meta: {
                isAuthenticated: true
            }
        },
        {
            path: '/keys-send',
            name: 'Отправленные ключи',
            component: KeysSend,
            meta: {
                isAuthenticated: true
            }
        },
        {
            path: '/balance',
            name: 'Баланс',
            component: Balance,
            meta: {
                isAuthenticated: true
            }
        },
        {
            path: '*',
            component: NotFound,
            meta: {
                isAuthenticated: true
            }
        }
    ]
});

router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.isAuthenticated)) {
        // этот путь требует авторизации, проверяем залогинен ли
        // пользователь, и если нет, перенаправляем на страницу логина
        //console.log(store.getters.isAuthenticated);
        if (!store.getters.isAuthenticated) {
            next({
                path: '/',
                query: { redirect: to.fullPath }
            })
        } else {
            next()
        }
    } else {
        next() // всегда так или иначе нужно вызвать next()!
    }
})

export default router


