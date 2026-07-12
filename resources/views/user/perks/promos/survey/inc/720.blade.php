<div class="modal fade xp-modal" id="720Modal" tabindex="-1" aria-labelledby="720ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">
                <img src="{{ asset('images/icons/extranet.svg') }}" alt="Mars Icon" class="me-2" style="width: 18px; height: 18px;">
                <span>Extranet Explorer &copy; 3002 | Winner</span>
                <img src="{{ asset('images/icons/close.png') }}" alt="Close" class="close position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close">
            </div>
            <div class="modal-body bg-light text-center p-4" id="flash">
                <h3 style="font-family: 'Comic Sans MS', 'Comic Sans', sans-serif;">
                    CONGRATULATIONS!!!!!!
                </h3>
                <p style="font-family: 'Comic Sans MS', 'Comic Sans', sans-serif;">You may have won an xbox 720&excl;&excl;&excl;&excl;&excl;&excl;</p>
                <img src="{{ asset('images/ads/720.jpg') }}" class="img-fluid p-1 mx-auto d-block" alt="720">
                <p style="font-family: 'Comic Sans MS', 'Comic Sans', sans-serif;">Enter your details to enter prize draw &lpar;ONLY 0 SPOTS LEFT&excl;&excl;&excl;&excl;&excl;&excl;&rpar;</p>
                <button type="button" disabled>Entries are now closed</button>
           </div>
        </div>                        
    </div>
</div>               

<script>
setInterval(() => {
    const el = document.getElementById("flash");
    el.classList.toggle("text-primary");
    el.classList.toggle("text-success");
}, 500);
</script> 