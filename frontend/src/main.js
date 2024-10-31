import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import vuetify from './plugins/vuetify'
import { loadFonts } from './plugins/webfontloader'
import axios from 'axios'


// axios.defaults.baseURL="http://192.168.254.189:8081/"
axios.defaults.baseURL="https://inventrack.online/backend/"

loadFonts()

createApp(App)
  .use(router)
  .use(vuetify)
  .mount('#app')
