<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.frontend.meta')
    @include('layouts.frontend.css')
    @yield('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

    @include('layouts.frontend.preheader')
    @include('layouts.frontend.header')

    @yield('content')

    @include('layouts.frontend.footer')
    @include('layouts.frontend.script')

 <!-- Firebase SDK -->
<script src="https://www.gstatic.com/firebasejs/9.22.2/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.22.2/firebase-messaging-compat.js"></script>

<script>
  // Your Firebase config here (replace with your own)
  const firebaseConfig = {
    apiKey: "AIzaSyAIS8NEsh1CAK-k4cVH4F9jy0x24Gu_6NU",
    authDomain: "tether-heart-c65f9.firebaseapp.com",
    projectId: "tether-heart-c65f9",
    storageBucket: "tether-heart-c65f9.appspot.com",
    messagingSenderId: "499343412634",
    appId: "1:499343412634:web:4c66e08a5a777bc9257e23",
    measurementId: "G-HCVFHMVHNX"
  };

  firebase.initializeApp(firebaseConfig);

  const messaging = firebase.messaging();

  // Request permission for notifications
  messaging.requestPermission()
    .then(() => messaging.getToken({ vapidKey: 'YOUR_PUBLIC_VAPID_KEY' })) // use your real VAPID key
    .then((token) => {
      console.log('FCM Token:', token);
      // You don't need to save token, since already saved
    })
    .catch((err) => {
      console.warn('Permission denied or error getting token', err);
    });

  // Listen for messages while app is in foreground
  messaging.onMessage((payload) => {
    console.log('Notification received in foreground:', payload);

    // Optionally show alert or custom UI
    alert(`Notification: ${payload.notification.title} - ${payload.notification.body}`);
  });
</script>


<script>
if ('serviceWorker' in navigator) {
  navigator.serviceWorker.register('/firebase-messaging-sw.js')
    .then(function(registration) {
      console.log('Service Worker registered with scope:', registration.scope);
      messaging.useServiceWorker(registration);
    }).catch(function(err) {
      console.error('Service Worker registration failed:', err);
    });
}

</script>

    <!-- Firebase Notification Script -->
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/12.1.0/firebase-app.js";
        import { getMessaging, getToken, onMessage } from "https://www.gstatic.com/firebasejs/12.1.0/firebase-messaging.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/12.1.0/firebase-analytics.js";

        // ✅ Firebase Config
        const firebaseConfig = {
            apiKey: "AIzaSyAIS8NEsh1CAK-k4cVH4F9jy0x24Gu_6NU",
            authDomain: "tether-heart-c65f9.firebaseapp.com",
            projectId: "tether-heart-c65f9",
            storageBucket: "tether-heart-c65f9.appspot.com",
            messagingSenderId: "499343412634",
            appId: "1:499343412634:web:4c66e08a5a777bc9257e23",
            measurementId: "G-HCVFHMVHNX"
        };

        // ✅ Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
        const messaging = getMessaging(app);

        // ✅ Request permission and get token
        Notification.requestPermission().then((permission) => {
            if (permission === 'granted') {
                getToken(messaging, {
                    vapidKey: 'BKE6pKe4SvyAjPXLYJq2QXNVlg890GqdXw2LoUlHMKVoo9zhWAf1bsxisD7MzB6MvkZSmRBVHD5CUUfqqeRhQJ4'
                }).then((currentToken) => {
                    if (currentToken) {
                        console.log('FCM Token:', currentToken);

                        // 🔐 Save token to Laravel API
                        fetch('/api/save-fcm-token', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                'Authorization': `Bearer 40|EwvANPSrMCMutlloZJHXtlrgCSI089tLRiNNwLM71511c95f`
                            },
                            body: JSON.stringify({ token: currentToken })
                        }).then(res => res.json()).then(data => {
                            console.log('Token saved response:', data);
                        });
                    } else {
                        console.warn('No registration token available.');
                    }
                }).catch((err) => {
                    console.error('Error retrieving token:', err);
                });
            } else {
                console.warn('Notification permission denied.');
            }
        });

        // ✅ Listen for foreground messages
        onMessage(messaging, (payload) => {
            console.log('Message received: ', payload);
            new Notification(payload.notification.title, {
                body: payload.notification.body,
                icon: payload.notification.icon || '/favicon.ico'
            });
        });
    </script>

</body>

</html>
