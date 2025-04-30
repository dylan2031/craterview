{{-- Logout modal--}}
<div class="modal fade xp-modal" id="logoutModal" tabindex="1" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">
                <img src="{{ asset('images/icons/mars.svg') }}" alt="Mars Icon" class="me-2" style="width: 18px; height: 18px;">
                <span>Extranet Explorer &copy; 3002 | Log out?</span>
                <img src="{{ asset('images/icons/close.png') }}" alt="Close" class="position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close">
            </div>
            <div class="modal-body p-0">
                <div class="container-flex bg-light text-dark text-center">
                    <br>
                    <h3 style="font-family: sans-serif;">
                        <img src="{{ asset('images/icons/about.svg') }}" width="32" height="32" class="img-fluid pb-1 sidebar-icon">
                        Notification
                    </h3>
                    <p style="font-family: sans-serif;">Are you sure you want to log out?</p>
                    <button type="button" class="btn xp-btn-secondary" onclick="document.getElementById('logout-form').submit();">Log Out</button>
                    <button type="button" class="btn xp-btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <br>
                    <br>
                </div>
            </div>
        </div>                        
    </div>
</div>  
{{-- End of logout modal--}}      