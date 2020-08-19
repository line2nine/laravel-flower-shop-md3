importScripts('https://www.gstatic.com/firebasejs/7.18.0/firebase-app.js')
importScripts('https://www.gstatic.com/firebasejs/7.18.0/firebase-analytics.js')
importScripts('https://www.gstatic.com/firebasejs/7.18.0/firebase-messaging.js')

const firebaseConfig = {
    apiKey: "AIzaSyAAqmOY8jAdplTsvzLmW25mQXj6L1XgQbU",
    authDomain: "testing-f1ea4.firebaseapp.com",
    databaseURL: "https://testing-f1ea4.firebaseio.com",
    projectId: "testing-f1ea4",
    storageBucket: "testing-f1ea4.appspot.com",
    messagingSenderId: "726219225619",
    appId: "1:726219225619:web:683c50c994abcd3da71de6",
    measurementId: "G-E5T5SB94DC"
};

firebase.initializeApp(firebaseConfig);

var messaging = firebase.messaging();

messaging.setBackgroundMessageHandler(function (payload) {
    console.log('[firebase-messaging-sw.js] Received background message', payload);
    // Customize notification
    var notificationTitle = 'Background Message Title';
    var notificationOptions = {
        body: 'Background Message Body',
        icon: '/firebase-logo.png'
    };
    return self.registration.showNotification(notificationTitle, notificationOptions)
});
