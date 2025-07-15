<!DOCTYPE html>
<html>
<head>
    <title>Extranet Portal &copy;3002</title>
    <meta charset="UTF-8" />
    <style>
        body {
            background-color: #FFFFCC;
            font-family: 'Courier New', monospace;
            color: #000;
            margin: 0;
            padding: 40px;
            text-align: center;
        }
        .logo {
            width: 96px;
            image-rendering: pixelated;
        }
        .box {
            border: 2px solid #000;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
            background: #C0C0C0;
            box-shadow: inset -2px -2px 0 #fff, inset 2px 2px 0 #808080;
        }
        .glitch {
            font-size: 18px;
            color: red;
            font-weight: bold;
        }
        .static {
            font-size: 14px;
            margin-top: 10px;
        }
        #error {
            display: none;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }
        #error.show {
            display: block;
            opacity: 1;
        }
        #loading p {
            font-weight: bold;
            font-size: 16px;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }
        .spinner {
            margin: 0 auto;
            width: 24px;
            height: 24px;
            border: 4px solid #999;
            border-top: 4px solid #444;
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        @keyframes spin {
            0% {transform: rotate(0deg);}
            100% {transform: rotate(360deg);}
        }
        button {
            margin: 15px 8px 0 8px;
            font-family: 'Courier New', monospace;
            font-size: 14px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="box">
        <div id="loading">
            <p>ESTABLISHING CONNECTION...</p>
            <div class="spinner"></div>
        </div>
        <div id="error" aria-live="polite" aria-atomic="true" role="alert">
            <img src="{{ asset('images/icons/extranet.svg') }}" alt="Extranet Logo" class="logo" />
            <p class="glitch">ERROR 0x0042: MARS EXTRANET CONNECTION FAILED</p>
            <p class="static">Secure link to Mars Extranet could not be established.</p>
            <p class="static">A handshake with the <b>SpaceSync™ Comm Buoy Satellite (ID: CRS-B7)</b> could not be completed.</p>
            <p class="static">Please contact your system administrator or try again later.</p>
            <p class="static">[Connection Attempt: AUTO-NEGOTIATE → TIMEOUT @ 4096ms]</p>
            <button onclick="location.reload()">Try again</button>
            <button onclick="window.history.back()">Return</button>
        </div>
    </div>

    <script>
        window.onload = function() {
            setTimeout(() => {
                const errorDiv = document.getElementById('error');
                const loadingDiv = document.getElementById('loading');
                loadingDiv.style.display = 'none';
                errorDiv.classList.add('show');
            }, 4096);
        }
    </script>
</body>
</html>
