<div id="loading-overlay" style="
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(200,200,200,0.95);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
">
  <div style="
      width: 220px;
      padding: 16px;
      background: #C0C0C0;
      border: 2px solid #fff;
      border-right-color: #808080;
      border-bottom-color: #808080;
      font-family: 'Tahoma', 'MS Sans Serif', sans-serif;
      font-size: 14px;
      color: #000;
      text-align: center;
      box-shadow: 2px 2px 0px #00000033;
  ">
    <!-- Tiny red IE icon -->
    <img src="{{ asset('images/extranet.webp') }}" alt="EE Icon" style="margin-bottom:8px;">
    <div id="loading-text">Loading...</div>
  </div>
</div>


<script>
// Hide overlay when page fully loads
window.addEventListener('load', () => {
  document.getElementById('loading-overlay').style.display = 'none';
});
</script>