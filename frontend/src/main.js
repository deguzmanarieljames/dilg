import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import vuetify from './plugins/vuetify'
import { loadFonts } from './plugins/webfontloader'
import axios from 'axios'



axios.defaults.baseURL="http://dilg.test/backend/"

loadFonts()

createApp(App)
  .use(router)
  .use(vuetify)
  .mount('#app')


  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/service-worker.js')
      .then((registration) => {
        console.log('Service Worker registered with scope:', registration.scope);
      })
      .catch((error) => {
        console.error('Service Worker registration failed:', error);
      });
  
    // Listen for the 'storage' event
    window.addEventListener('storage', (event) => {
      if (event.key === 'logoutEvent') {
        console.log('Received logout event in main.js');
        // Perform your logout logic here
        // For example, redirect to the login page
        window.location.href = '/login';
      }
    });
  }