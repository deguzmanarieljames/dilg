// Give the service worker access to Firebase Messaging.
// Note that you can only use Firebase Messaging here. Other Firebase libraries
// are not available in the service worker.
importScripts('https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/10.7.1/firebase-messaging.js');

// Initialize the Firebase app in the service worker by passing in
// your app's Firebase config object.
// https://firebase.google.com/docs/web/setup#config-object
firebase.initializeApp({
    apiKey: "AIzaSyBYJFAEo7DoVcirECtaIzoqqAYn2OLW2qk",
    authDomain: "ci4-backend-firebase.firebaseapp.com",
    projectId: "ci4-backend-firebase",
    storageBucket: "ci4-backend-firebase.appspot.com",
    messagingSenderId: "876476699989",
    appId: "1:876476699989:web:6c7fa2d9fe158d32530bdc",
    measurementId: "G-NC5RW3RMWM"
});

// Retrieve an instance of Firebase Messaging so that it can handle background
// messages.
const messaging = firebase.messaging();

messaging.onBackgroundMessage((payload) => {
    console.log(
      '[firebase-messaging-sw.js] Received background message ',
      payload
    );
    // Customize notification here
    const notificationTitle = payload.notification.title;
    const notificationOptions = {
      body: payload.notification.body,
      icon: '/notif-icon.png'
    };
  
    self.registration.showNotification(notificationTitle, notificationOptions);
  });


  self.addEventListener('install', (event) => {
    console.log('Service worker installed');
  });

  self.addEventListener('activate', (event) => {
    console.log('Service worker activated');
  });
