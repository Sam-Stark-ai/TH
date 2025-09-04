<!DOCTYPE html>
<html>
<head>
    <title>Live BPM Monitor</title>
    <!-- Pusher client library -->
    <script src="https://js.pusher.com/8.4.0/pusher.min.js"></script>
</head>
<body>
    <h1>Live BPM Monitor</h1>
    <div id="bpm-output">Waiting for data...</div>

    <script>
        Pusher.logToConsole = true;

        var pusher = new Pusher('71fd0af85fd81b611ae7', {
            cluster: 'ap2'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            console.log("BPM Data:", data);
            document.getElementById('bpm-output').innerText = 'BPM: ' + data.message.bpm;
        });
    </script>
</body>
</html>
