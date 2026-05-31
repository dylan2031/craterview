<div class="modal fade xp-modal"
    id="emailModal"
    tabindex="-1"
    aria-labelledby="emailLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered modal-lg">

        <div class="modal-content">

            <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">

                <img
                    src="{{ asset('images/icons/extranet.svg') }}"
                    alt="Mars Icon"
                    class="me-2"
                    style="width:18px;height:18px;">

                <span id="mailCounter">
                    Extranet Explorer &copy; 3002 | 1 new e-mail
                </span>

                <img
                    src="{{ asset('images/icons/close.png') }}"
                    alt="Close"
                    class="close position-absolute top-0 end-0"
                    data-bs-dismiss="modal">

            </div>

            <div class="modal-body">

                <div class="email-client">

                    <div class="email-header">
                        <strong>E-Mail™</strong>
                        <span id="inboxCount">
                            Inbox (1)
                        </span>
                    </div>

                    <div class="email-window">

                        <div class="email-meta" id="emailMeta"></div>

                        <hr>

                        <div
                            class="email-body"
                            id="emailBody">
                        </div>

                        <button
                            class="claim-btn"
                            id="claimBtn"
                            onclick="claimInheritance()">

                            CLAIM INHERITANCE

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<style>

.email-client{
    max-width:700px;
    margin:auto;

    border:3px outset #c0c0c0;

    background:#ece9d8;

    font-family:Tahoma,Arial,sans-serif;
}

.email-header{

    background:
    linear-gradient(#0a246a,#3a6ea5);

    color:white;

    padding:8px 12px;

    display:flex;

    justify-content:space-between;
}

.email-window{
    padding:16px;
}

.email-meta{

    background:white;

    border:1px solid #999;

    padding:10px;
}

.email-meta p{
    margin:4px 0;
}

.email-body{

    background:white;

    border:1px solid #999;

    padding:20px;

    margin-top:10px;

    line-height:1.6;

    max-height:320px;

    overflow-y:auto;
}

.claim-btn{

    margin-top:15px;

    background:
    linear-gradient(#ffffff,#dcdcdc);

    border:2px outset #c0c0c0;

    padding:10px 18px;

    cursor:pointer;
}

.claim-btn:hover{

    transform:scale(1.02);
}

.claim-btn:disabled{

    opacity:.8;

    cursor:not-allowed;
}

.suspicious{

    background:#fff0f0;

    border-color:#cc0000;
}

</style>

<script>

const originalMeta = `
<p><strong>From:</strong> Prince Chukwuemeka of Proxima Centauri b</p>
<p><strong>Subject:</strong> URGENT INHERITANCE TRANSFER</p>
<p><strong>Date:</strong> Today</p>
`;

const originalBody = `

<p>Dear Cousin,</p>

<p>
I am Prince Chukwuemeka, the son of the late former
Minister of Wealth on Proxima Centauri b.
</p>

<p>
Before his death he deposited
<strong>$55.55 Million Universal Galactic Credits</strong>
in a suspense account.
</p>

<p>
I seek a trustworthy family member who can receive this fund into their bank account, as I am legally restricted from accessing these funds.
</p>

<p>
I offer 50% of the total sum as compensation for your assistance. Please reply urgently so we can discuss the modalities of this transaction.
</p>

<p>
Yours among the stars,<br>
Prince Chukwuemeka
</p>

`;

function resetEmail(){

document.getElementById("emailMeta")
.innerHTML =
originalMeta;

document.getElementById("emailBody")
.innerHTML =
originalBody;

document.getElementById("emailBody")
.scrollTop = 0;

document.getElementById("mailCounter")
.innerHTML =
"Extranet Explorer &copy; 3002 | 1 new e-mail";

document.getElementById("inboxCount")
.innerText =
"Inbox (1)";

document.getElementById("emailMeta")
.classList.remove("suspicious");

const btn =
document.getElementById("claimBtn");

btn.disabled = false;

btn.innerText =
"CLAIM INHERITANCE";

}

function claimInheritance(){

const body =
document.getElementById("emailBody");

body.innerHTML = `

<p><strong>Dear Potential Fraudster,</strong></p>

<p>
I have reviewed your attempt
to immediately claim my inheritance.
</p>

<p>
Your enthusiasm has raised concerns.
</p>

<p>
People normally ask questions before accepting a large sum like this from a stranger.
</p>

<p>
I therefore conclude that
<strong>YOU are the scammer.</strong>
</p>

<ul>
<li>I have notified the fraud division</li>
<li>Your cousin status has been revoked</li>
<li>The inheritance has been suspended</li>
</ul>

<p>
Regards,<br>
Prince Chukwuemeka
</p>

`;

body.scrollTop = 0;

document.getElementById("emailMeta")
.classList.add("suspicious");

document.getElementById("mailCounter")
.innerHTML =
"Extranet Explorer &copy; 3002 | 2 new e-mails";

document.getElementById("inboxCount")
.innerText =
"Inbox (2)";

const btn =
document.getElementById("claimBtn");

btn.disabled = true;

btn.innerText =
"TRANSMISSION TERMINATED";

}

resetEmail();

document
.getElementById("emailModal")
.addEventListener(
"hidden.bs.modal",
resetEmail
);

</script>