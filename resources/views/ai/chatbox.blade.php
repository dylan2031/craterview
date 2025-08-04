<style>
  #blimby {
    position: fixed;
    bottom: 1rem;
    right: 1rem;
    width: 80px;
    height: auto;
    z-index: 9999;
    pointer-events: auto;
    cursor: pointer;
  }

  #blimby-chat {
    position: fixed;
    bottom: 1rem;
    right: calc(1rem + 80px + 0.5rem);
    max-width: 300px;
    /*max-height: 200px;*/
    background: #fff8b0;
    border: 2px solid #1d4e89;
    border-radius: 0.75rem;
    padding: 1rem;
    font-size: 0.95rem;
    color: #000;
    z-index: 1050;
  }

    #blimby-log {
    max-height: 170px;
    overflow-y: auto;
  }

    #blimby-close {
    position: absolute;
    top: 0.25rem;
    right: 0.5rem;
    background: transparent;
    border: none;
    font-size: 1rem;
    font-weight: bold;
    color: #1d4e89;
    cursor: pointer;
  }
</style>

<div id="blimby-chat" class="position-fixed ms-4">
  <button id="blimby-close" aria-label="Close">&times;</button>
  <div id="blimby-log" class="mb-2">  <p class="fw-bold">Greetings, Earthling!</p>
  <p>I'm Blimby, Craterview's cyberspace concierge. Let me know if you need any assistance.</p></div>
  <div class="input-group">
      <input type="text" id="blimby-input" class="form-control form-control-sm" placeholder="Type here" />
      <button class="btn btn-primary btn-sm" id="blimby-send">Ask!</button>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const input = document.getElementById('blimby-input');
  const sendButton = document.getElementById('blimby-send');
  const log = document.getElementById('blimby-log');

  const closeButton = document.getElementById('blimby-close');
  const chatbox = document.getElementById('blimby-chat');

  const blimbyImage = document.getElementById('blimby');
  blimbyImage.addEventListener('click', function () {
    chatbox.style.display = 'block';
  });


  function showUserMessage() {
    const message = input.value.trim();
    if (!message) return;

    log.innerHTML += `<div><strong>You:</strong> ${message}</div>`;
    input.value = '';

    fetch('/blimby-chat', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify({ message: message })
    })
    .then(response => response.json())
    .then(data => {
      log.innerHTML += `<div><strong>Blimby:</strong> ${data.reply}</div>`;
    })
    .catch(error => {
      log.innerHTML += `<div><strong>Blimby:</strong> Sorry, there was an error.</div>`;
      console.error('Blimby error:', error);
    });
  }

  sendButton.addEventListener('click', showUserMessage);
  input.addEventListener('keypress', function (e) {
    if (e.key === 'Enter') showUserMessage();
  });

  closeButton.addEventListener('click', function () {
    chatbox.style.display = 'none';
  });
});

</script>
