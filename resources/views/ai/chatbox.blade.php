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
    max-height: 200px;
    background: #fff8b0;
    border: 2px solid #1d4e89;
    border-radius: 0.75rem;
    padding: 1rem;
    overflow-y: auto;
    font-size: 0.95rem;
    color: #000;
    z-index: 1050;
  }
</style>

<div id="blimby-chat" class="position-fixed ms-4">
  <p class="fw-bold">Greetings, Earthling!</p>
  <p>I'm Blimby, Craterview's cyberspace concierge. Let me know if you need any assistance.</p>
  <div class="input-group">
      <input type="text" id="blimby-input" class="form-control form-control-sm" placeholder="Type here" />
      <button class="btn btn-primary btn-sm" id="blimby-send">Ask!</button>
  </div>
</div>
