require('./bootstrap')

import {createApp} from 'vue'
import App from './App.vue'
import axios from 'axios'
import router from './router'
import store from './store';
import Toaster from "@meforma/vue-toaster";

const app = createApp(App)
app.config.globalProperties.$axios = axios;
app.use(router)
app.use(store)
app.use(Toaster, {
    position: "top-right",
    max: 5,
});

app.mount('#app')
