var firebaseConfig = {
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

const messaging = firebase.messaging();
messaging.requestPermission().then(function () {
    console.log('Notification permission granted');
    return messaging.getToken()
}).then(function (token) {
    $('#device_token').val(token);
    console.log(token)
}).catch(function (err) {
    console.log('Can not get permission to notify', err);
});

messaging.onMessage((payload) => {
    $('.number-alert').empty().html(payload.data['badge']);
    $('.number-message').empty().html('You have '+payload.data['badge']+' Notifications');
    console.log(payload)
})
