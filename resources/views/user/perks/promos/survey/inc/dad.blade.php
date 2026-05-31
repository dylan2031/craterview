<div class="modal fade xp-modal" id="dadModal" tabindex="-1" aria-labelledby="dadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">
                <img src="{{ asset('images/icons/extranet.svg') }}" alt="Mars Icon" class="me-2" style="width: 18px; height: 18px;">
                <span>Extranet Explorer &copy; 3002 | Live chat</span>
                <img src="{{ asset('images/icons/close.png') }}" alt="Close" class="close position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close">
            </div>

            <div class="modal-body p-0">
                <div class="dad-chat" style="background-color:red;">

                    <p class="text-center text-light" style="font-size:1.5rem;">🔥 SINGLE DADS IN YOUR AREA 🔥</p>

                    <div id="chatBox" style="
                        border:2px inset gray;
                        background:#fff;
                        padding:10px;
                        height:220px;
                        overflow-y:auto;
                        font-family:Tahoma;
                    ">
                        <p><b>SingleDad42:</b> heyyyy xD</p>
                        <p><b>SingleDad42:</b> u seem cool &colon;&rpar;</p>
                    </div>

                    <br>

                    <!-- WRAPPED CONTROLS -->
                    <div id="chatControls">
                        <input
                            type="text"
                            id="msg"
                            placeholder="Type message..."
                            style="width:70%;"
                        >

                        <button onclick="sendMessage()">
                            Send
                        </button>
                    </div>

                </div>

                <script>
                function sendMessage() {

                    const box = document.getElementById("chatBox");
                    const msg = document.getElementById("msg");
                    const controls = document.getElementById("chatControls");

                    if (msg.value.trim() === "") {
                        return;
                    }

                    box.innerHTML += `
                        <p><b>You:</b> ${
                            msg.value
                                .replace(/</g, "&lt;")
                                .replace(/>/g, "&gt;")
                        }</p>

                        <p style="color:green;">
                            SingleDad42 is typing...
                        </p>
                    `;

                    msg.disabled = true;

                    // HIDE INPUT + BUTTON AFTER SEND
                    controls.style.display = "none";

                    setTimeout(() => {

                        box.innerHTML += `
                            <hr>

                            <h3 style="
                                color:red;
                                font-family:Impact;
                            ">
                                FREE CHAT LIMIT REACHED
                            </h3>

                            <button disabled>
                                BUY MORE CREDITS
                            </button>

                            <marquee id="flash">
                                LIMITED TIME OFFER
                            </marquee>
                        `;

                        box.scrollTop = box.scrollHeight;

                    }, 1200);
                }
                </script>

            </div>
        </div>                        
    </div>
</div>