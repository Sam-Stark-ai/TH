<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<meta name="csrf-token" content="{{ csrf_token() }}" />

<title>Tether Heart</title>

<link rel="shortcut icon" href="{{ asset('FrontendAssets/images/tethar-image/fav icon.png') }}" type="image/x-icon"/>

<!--<div id="bpm-display">Waiting for BPM data...</div>
<div id="ekg-display">
    <h4>EKG Data:</h4>
    <canvas id="ekg-chart" width="400" height="200" style="border: 1px solid #ddd;"></canvas>
    <div id="ekg-values">No EKG data received</div> 
</div>
<div id="partners-bpm-display">
   <h4>Connected Partners BPM:</h4> 
    <div id="partners-bpm-list">No partners connected</div>
</div>
-->
<script src="https://js.pusher.com/8.4.0/pusher.min.js"></script>

<script>
  Pusher.logToConsole = true; // Enable for debugging; remove in production

  const userId = {{ auth()->check() ? auth()->id() : 'null' }};

  document.addEventListener('DOMContentLoaded', () => {
    if (!userId) {
      console.log('⚠️ User not authenticated, skipping Pusher initialization');
      document.getElementById('bpm-display').innerText = 'Please log in to receive BPM updates';
      return;
    }

    const pusher = new Pusher('71fd0af85fd81b611ae7', {
      cluster: 'ap2',
      authEndpoint: '/api/broadcasting/auth',
      auth: {
        headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        }
      }
    });

    const channelName = `bpm-channel.${userId}`;
    const channel = pusher.subscribe(channelName);

    // Store BPM data for all users
    const bpmData = {};

    // Function to draw EKG chart
    function drawEKGChart(ekgData, canvasId) {
        const canvas = document.getElementById(canvasId);
        const ctx = canvas.getContext('2d');
        const width = canvas.width;
        const height = canvas.height;

        // Clear canvas
        ctx.clearRect(0, 0, width, height);
        ctx.strokeStyle = '#007bff';
        ctx.lineWidth = 2;

        if (ekgData && ekgData.length > 0) {
            ctx.beginPath();
            const stepX = width / (ekgData.length - 1);
            
            ekgData.forEach((value, index) => {
                const x = index * stepX;
                // Normalize EKG values to fit canvas height (assuming values are between 0 and 1)
                const y = height - (value * height);
                
                if (index === 0) {
                    ctx.moveTo(x, y);
                } else {
                    ctx.lineTo(x, y);
                }
            });
            
            ctx.stroke();
        }
    }

    channel.bind('bpm-updated', (data) => {
      console.log("✅ Real-time BPM data received:", data);
      console.log("📊 Data details:", {
        user_id: data.user_id,
        bpm: data.bpm,
        time: data.time,
        ekg_count: data.ekg ? data.ekg.length : 0,
        timestamp: new Date().toISOString()
      });

      // Store the BPM data
      bpmData[data.user_id] = data;

      // Update own BPM display
      if (data.user_id == userId) {
        document.getElementById('bpm-display').innerText =
          `Your BPM: ${data.bpm} at ${data.time}`;
        
        // Update own EKG display
        if (data.ekg && data.ekg.length > 0) {
            document.getElementById('ekg-values').innerText = 
                `EKG Data Points: ${data.ekg.length} | Latest: ${data.ekg[data.ekg.length - 1]}`;
            drawEKGChart(data.ekg, 'ekg-chart');
        }
      }

      // Update partners BPM display
      updatePartnersBPMDisplay();
    });

    // Function to update partners BPM display
    function updatePartnersBPMDisplay() {
      const partnersList = document.getElementById('partners-bpm-list');
      const ownUserId = userId;
      
      let html = '';
      let hasPartners = false;

      Object.keys(bpmData).forEach(userId => {
        if (userId != ownUserId) { // Don't show own BPM in partners list
          hasPartners = true;
          const data = bpmData[userId];
          html += `
            <div class="partner-bpm-item" style="border: 1px solid #ddd; padding: 10px; margin: 5px 0; border-radius: 5px;">
              <strong>Partner ID: ${data.user_id}</strong><br>
              BPM: ${data.bpm}<br>
              Time: ${data.time}<br>
              EKG: ${data.ekg ? data.ekg.length + ' data points' : 'No EKG data'}
            </div>
          `;
        }
      });

     // if (!hasPartners) {
     //   html = 'No partners connected or no BPM data received yet';
     // }

      partnersList.innerHTML = html;
    }

    // Add debugging for all events on this channel
    channel.bind_global((eventName, data) => {
      console.log("🔍 Global event received:", eventName, data);
    });

    // Test event binding
    console.log("🔍 Channel event bindings:", {
      channel: channelName,
      events: ['bpm-updated', 'pusher:subscription_succeeded', 'pusher:subscription_error']
    });

    channel.bind('pusher:subscription_succeeded', () => {
      console.log(`✅ Subscription succeeded for ${channelName}`);
      console.log("🔍 Channel details:", {
        name: channelName,
        userId: userId,
        timestamp: new Date().toISOString()
      });
    });

    channel.bind('pusher:subscription_error', (status) => {
      console.error('❌ Subscription error:', status);
      console.error('🔍 Error details:', {
        status: status,
        channelName: channelName,
        userId: userId,
        timestamp: new Date().toISOString()
      });
    });

    // Add general Pusher event logging
    pusher.connection.bind('connected', () => {
      console.log('🔌 Pusher connected with socket ID:', pusher.connection.socket_id);
    });

    pusher.connection.bind('disconnected', () => {
      console.log('🔌 Pusher disconnected');
    });

    pusher.connection.bind('error', (err) => {
      console.error('❌ Pusher connection error:', err);
    });
  });
</script>
