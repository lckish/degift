import './bootstrap';
import {createApp} from 'vue'
import App from './App.vue'
import router from './router.js'

createApp(App)
    .use(router)
    .mount('#app')

///////////////////////////////////////////////////
// import axios from "axios";
//app.config.globalProperties.axios = axios
