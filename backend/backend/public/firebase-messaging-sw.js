importScripts('https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/10.7.1/firebase-messaging.js');

const firebaseConfig = {
  apiKey: "AIzaSyBYJFAEo7DoVcirECtaIzoqqAYn2OLW2qk",
  authDomain: "ci4-backend-firebase.firebaseapp.com",
  projectId: "ci4-backend-firebase",
  storageBucket: "ci4-backend-firebase.appspot.com",
  messagingSenderId: "876476699989",
  appId: "1:876476699989:web:6c7fa2d9fe158d32530bdc",
  measurementId: "G-NC5RW3RMWM"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);


const fcm = firebase.messaging()
fcm.getToken({
    vapidKey: ''
}).then((token) => {
    console.log('getToken ', token)
});


fcm.onBackgroundMessage((data) => {
    console.log('onBackgroundMessage: ', data)
});