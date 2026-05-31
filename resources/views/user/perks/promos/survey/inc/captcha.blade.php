<div class="modal fade xp-modal" id="captchaModal" tabindex="-1" aria-labelledby="captchaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">
                <img src="{{ asset('images/icons/extranet.svg') }}" alt="Mars Icon" class="me-2" style="width: 18px; height: 18px;">
                <span>Extranet Explorer &copy; 3002 | Captcha</span>
                <img src="{{ asset('images/icons/close.png') }}" alt="Close" class="close position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close">
            </div>

            <div class="modal-body bg-light p-4">

                <div class="text-center mb-3">
                    <p class="fw-bold">Select all images containing Earth</p>
                    <p class="text-muted mb-0">Security check required for off-world access</p>
                </div>

                <!-- GRID -->
                <div class="row g-2">
                    @for ($i = 1; $i <= 9; $i++)
                        <div class="col-4">
                            <div class="captcha-tile" onclick="toggleTile(this)">
                                <img src="{{ asset('images/ads/planet-' . (($i % 4) + 1) . '.webp') }}"
                                     class="img-fluid">
                                <div class="checkmark">✓</div>
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- RESULT -->
                <div id="captchaResult" class="alert alert-danger mt-4 d-none text-center">
                    Verification failed.
                </div>

                <div class="text-center mt-4">
                    <button class="btn xp-btn-secondary" onclick="verifyCaptcha()">
                        VERIFY
                    </button>
                </div>

            </div>

        </div>
    </div>
</div>

<style>
.captcha-tile {
    position: relative;
    border: 3px solid #bbb;
    cursor: pointer;
    overflow: hidden;
    transition: 0.15s;
}

.captcha-tile:hover {
    transform: scale(0.98);
}

.captcha-tile.selected {
    border-color: #0d6efd;
}

.captcha-tile img {
    width: 100%;
    height: 140px;
    object-fit: cover;
}

.checkmark {
    position: absolute;
    top: 8px;
    right: 8px;
    width: 26px;
    height: 26px;
    background: #0d6efd;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    opacity: 0;
}

.captcha-tile.selected .checkmark {
    opacity: 1;
}
</style>

<script>
function toggleTile(el) {
    el.classList.toggle("selected");
}

function verifyCaptcha() {
    const result = document.getElementById("captchaResult");

    result.classList.remove("d-none");
    result.className = "alert alert-danger mt-4 text-center";
    result.innerHTML = "❌ Verification failed.";
}

document.getElementById("earthCaptchaModal")
.addEventListener("hidden.bs.modal", resetCaptcha);

function resetCaptcha() {
    document.querySelectorAll(".captcha-tile").forEach(tile => {
        tile.classList.remove("selected");
    });

    const result = document.getElementById("captchaResult");
    result.classList.add("d-none");
    result.innerHTML = "";
}
</script>