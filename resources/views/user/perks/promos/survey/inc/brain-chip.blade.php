<div class="modal fade xp-modal" id="brainChipModal" tabindex="-1" aria-labelledby="brainChipModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">
                <img src="{{ asset('images/icons/extranet.svg') }}" alt="Mars Icon" class="me-2" style="width: 18px; height: 18px;">
                <span>Extranet Explorer &copy; 3002 | Winner</span>
                <img src="{{ asset('images/icons/close.png') }}" alt="Close" class="close position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close">
            </div>
            <div class="modal-body bg-light text-center p-4">
                <h3 style="font-family: 'Comic Sans MS', 'Comic Sans', cursive, sans-serif;" class="text-primary" id="winnerflash">
                    WINNER&excl;&excl;&excl;&excl;&excl;&excl;
                </h3>
                <p>You have won a NeuraChip Pro X12</p>
                <img src="{{ asset('images/ads/neurachip.jpg') }}" class="img-fluid p-1 mx-auto d-block" alt="NeuraChip Pro X12">
                <p>Fill out the form below to claim&colon;</p>
                <form action="#">
                <label for="fname">Full name:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="DOB">Date of birth:</label><br>
                <input type="text" id="DOB" name="DOB"><br>
                <label for="GIN">Galactic Insurance Number:</label><br>
                <input type="text" id="GIN" name="GIN"><br><br>
                <input type="submit" value="Submit">
                </form> 

           </div>
        </div>                        
    </div>
</div>               

<script>
setInterval(() => {
    const el = document.getElementById("winnerflash");
    el.classList.toggle("text-danger");
    el.classList.toggle("text-primary");
}, 500);
</script> 