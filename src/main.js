import '@fortawesome/fontawesome-free/css/all.css'
import Vue from 'vue'
import './plugins/axios'
import './plugins/vuetify'
import App from './App.vue'
import router from './router'
import './registerServiceWorker'
import Vuetify from 'vuetify'

// Helpers
import colors from 'vuetify/es5/util/colors'
import store from './store'

Vue.config.productionTip = false

Vue.use(Vuetify, {
    iconfont: 'fa',
    theme: {
        primary: colors.blue.darken1, // #E53935
        secondary: colors.blue.lighten4, // #FFCDD2
        accent: colors.indigo.base // #3F51B5
    }
});

new Vue({
    router,
    store,
    render: h => h(App)
}).$mount('#app')