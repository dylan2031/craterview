{{-- 

This section handles the BioPay 'pay with biometrics' feature.

I intentionally kept the HTML, CSS, and JavaScript together in a single include 
for simplicity, rather than splitting it into separate files. 
Because BioPay is a fun fictional feature rather than a core part of this application, 
I prioritized quick integration over structure here.

If BioPay were a real product, I would organize this more cleanly.

--}}

<style>
  /* Video cam frame styling */
  .video-wrapper {
    position: relative;
    padding-top: 75%; /* 4:3 aspect ratio */
    background-color: #666;
    border: 5px solid #333;
    border-radius: 12px;
    overflow: hidden;
    max-width: 100%;
    margin: 0 auto;
  }

  #videoElement {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /* Scan overlay */
  .retro-scan-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    pointer-events: none;
    z-index: 2;
  }

  .scan-line {
    position: absolute;
    top: 0;
    left: 0;
    height: 4px;
    width: 100%;
    background: red;
    box-shadow: 0 0 10px red;
    animation: scan 2s infinite linear;
  }

  @keyframes scan {
    0% { top: 0%; }
    100% { top: 100%; }
  }

  .scan-line-2 {
    position: absolute;
    top: 0;
    left: 0;
    width: 1px;
    height: 100%;
    background: blue;
    box-shadow: 0 0 10px white;
    opacity: 0;
    animation: scan-2 2s linear 2; /* Animation running twice */
    animation-delay: 6s;
    animation-fill-mode: both;
    z-index: 2;
  }

  @keyframes scan-2 {
    0% {
      left: 0%; /* Start from the left */
      opacity: 0; /* Start invisible */
    }
    50% {
      opacity: 1; /* Become visible halfway */
    }
    100% {
      left: 100%; /* Move to the right */
      opacity: 1; /* End visible */
    }
  }

  .scan-line-3 {
  position: absolute;
  top: 0;
  right: 0; /* Start from the right */
  width: 1px;
  height: 100%;
  background: teal; /* Change color if needed */
  box-shadow: 0 0 10px white;
  opacity: 0;
  animation: scan-3 2s linear 2; /* Animation running twice */
  animation-delay: 6s;
  animation-fill-mode: both;
  z-index: 2;
}

@keyframes scan-3 {
  0% {
    right: 0%; /* Start from the right */
    opacity: 0; /* Start invisible */
  }
  50% {
    opacity: 1; /* Become visible halfway */
  }
  100% {
    right: 100%; /* Move to the left */
    opacity: 1; /* End visible */
  }
}


  .scan-text {
    position: absolute;
    bottom: 10px;
    width: 100%;
    text-align: center;
    font-family: 'Courier New', monospace;
    color: yellow;
    text-shadow: 0 0 5px #ff0000;
    animation: pulseText 1s infinite;
    font-size: 1rem;
  }

  @keyframes pulseText {
    0%, 100% { opacity: 1; }
    70% { opacity: 0.7; }
  }

  .retina-img {
    position: absolute;
    top: 20px;
    left: 20px;
    width: 60%;
    height: auto;
    opacity: 0;
    filter: invert(1);
    transition: opacity 1s ease-in-out, filter 0.5s ease-in-out;
    z-index: 3;
    transform: none; /* Remove centering */
  }

  .retina-img.show {
    opacity: 1;
  }

  .retina-img.normal {
    filter: invert(0);
  }

  /* Animation to show retina image after 9 seconds */
  @keyframes showRetinaImg {
    0% {
      opacity: 0;
      transform: scale(0); /* Start tiny */
    }
    100% {
      opacity: 1;
      transform: scale(1); /* Shrink to original size */
    }
  }

  .retina-img.show {
    animation: showRetinaImg 1s forwards;
  }

  /* Face image styling */
  .face-img {
    position: fixed;
    top: 20px;            /* Add top margin */
    left: 0;              /* Remove left offset */
    right: 0;             /* Remove right offset */
    margin-left: auto;    /* Center horizontally */
    margin-right: auto;   /* Center horizontally */
    bottom: 20px;         /* Add bottom margin */
    width: auto;
    height: auto;
    max-width: calc(100vw - 40px);  /* Subtract margins from the viewport width */
    max-height: calc(100vh - 40px); /* Subtract margins from the viewport height */
    object-fit: contain;  /* Ensure aspect ratio is maintained */
    opacity: 0;
    transition: opacity 1s ease-in-out, transform 1s ease-in-out;
    z-index: 999999;
  }

  /* Animation to show face image after 3 seconds */
  @keyframes showFaceImg {
    0% {
      opacity: 0; /* Start hidden */
      transform: scale(4); /* Start huge */
    }
    100% {
      opacity: 0.8; /* End visible */
      transform: scale(1); /* Shrink to original size */
    }
  }

  /* Animation for fading out the face image */
  @keyframes fadeOutFaceImg {
    0% {
      opacity: 0.8;
    }
    100% {
      opacity: 0; /* Fade to invisible */
    }
  }

  /* Apply show and fade out animations */
  .face-img.show {
    animation: showFaceImg 1s forwards;
  }

  .face-img.fadeOut {
    animation: fadeOutFaceImg 1s forwards;
  }
</style>

<!-- Hidden Audio player for the MP3 -->
<audio id="bioPayAudio" autoplay style="visibility: hidden;">
  <source src="{{ asset('audio/biopay.wav') }}" type="audio/wav">
</audio>

<!-- Modal for biometric verification -->
<div class="modal fade xp-modal" id="bioModal" tabindex="-1" aria-labelledby="bioModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">
        <img src="{{ asset('images/icons/mars.svg') }}" alt="Mars Icon" class="me-2" style="width: 18px; height: 18px;">
        <span>Extranet Explorer &copy; 3002 | BioPay</span>
    </div>

      <div class="modal-body text-center bg-light">
        <p class="mb-3">Please be still while we scan your biometric data.</p>
        <div class="video-wrapper">
          <video autoplay playsinline muted id="videoElement"></video>
          <div class="retro-scan-overlay">
            <img src="{{ asset('images/payment/face.png') }}" alt="Facial capture" id="faceImg" class="face-img d-none" />
            <img src="{{ asset('images/payment/eye.png') }}" alt="Retina capture" id="retinaImg" class="retina-img d-none" />
            <div class="scan-line"></div>
            <div class="scan-line-2"></div>
            <div class="scan-line-3"></div>
            <div class="scan-text" id="scanText">SCANNING RETINA...</div>
          </div>
        </div>
        <p class="mb-3">Time remaining: <span id="countdown">15</span> seconds</p>
        <!-- submission form -->
        <form id="proceedForm" action="{{ route('payment.confirm') }}" method="POST" class="d-none mt-3">
          @csrf
          <button type="submit" class="btn xp-btn-primary">Proceed</button>
        </form>

        
        <div id="camError" class="text-danger mt-2 d-none">BioPay requires camera access to initiate scan.</div>
      </div>
    </div>
  </div>
</div>

<script>
  // Camera setup
  const video = document.querySelector("#videoElement");
  const errorMsg = document.querySelector("#camError");

  navigator.mediaDevices.getUserMedia({ video: true })
    .then(stream => {
      video.srcObject = stream;
    })
    .catch(err => {
      console.error("Camera error:", err);
      errorMsg.classList.remove("d-none");
    });

  // Scan text sequence
  const scanMessages = [
    "INITIATING FACIAL SCAN...",
    " ",
    "SCANNING EYE RETINA...",
    "RETINA ACCEPTED",
    "IDENTITY VERIFIED ACCESS GRANTED",
    "YOU MAY PROCEED",
  ];

  const scanText = document.getElementById("scanText");
  const retinaImg = document.getElementById("retinaImg");
  const faceImg = document.getElementById("faceImg");
  const proceedForm = document.getElementById("proceedForm"); // <-- NEW

  function startScanSequence() {
    let scanStep = 0;

    const updateScanText = () => {
      scanText.textContent = scanMessages[scanStep];
      scanStep++;
      if (scanStep < scanMessages.length) {
        setTimeout(updateScanText, 3000);
      }
    };

    scanText.textContent = scanMessages[0];
    updateScanText();

    // Reset and animate retina image
    retinaImg.classList.remove("show", "normal");
    retinaImg.classList.add("d-none");

    // Trigger face image after 3 seconds
    setTimeout(() => {
      faceImg.classList.remove("d-none"); 
      faceImg.classList.add("show");
    }, 3000);

    setTimeout(() => {
      retinaImg.classList.remove("d-none");
      retinaImg.classList.add("show");

      setTimeout(() => {
        retinaImg.classList.add("normal");
      }, 2000);
    }, 9000);

    // Fade out the face image after 6 seconds
    setTimeout(() => {
      faceImg.classList.add("fadeOut");
    }, 6000);
  }

  // Timer
  let timeLeft = 15;
  const countdownEl = document.getElementById('countdown');

  const timer = setInterval(() => {
    timeLeft--;
    countdownEl.textContent = timeLeft;
    if (timeLeft <= 0) {
      clearInterval(timer);
      proceedForm.classList.remove('d-none'); // <-- SHOW the form
    }
  }, 1000); 

  document.getElementById('bioModal').addEventListener('shown.bs.modal', startScanSequence);
</script>
