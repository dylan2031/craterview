<nav aria-label="Dashboard sub navigation">
    <div>
        <ul class="nav nav-tabs nav-fill flex-nowrap custom-tabs">
            <li class="nav-item">
                <button class="nav-link active d-flex justify-content-center" data-section="reservations">
                    <img src="{{ asset('images/icons/dashboard-reservations.svg') }}" width="32" height="32" class="img-fluid">
                    <span class="inline d-none d-lg-block">&nbsp;Manage Reservations</span>
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link d-flex justify-content-center" data-section="payments">
                    <img src="{{ asset('images/icons/dashboard-payments.svg') }}" width="32" height="32" class="img-fluid">
                    <span class="inline d-none d-lg-block">&nbsp;Payment History</span>
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link d-flex justify-content-center" data-section="settings">
                    <img src="{{ asset('images/icons/dashboard-settings.svg') }}" width="32" height="32" class="img-fluid">
                    <span class="inline d-none d-lg-block">&nbsp;Account Settings</span>
                </button>
            </li>
        </ul>
    </div>
</nav>

{{-- this script takes care of the active tab--}}
<script>
    document.querySelectorAll('.nav-link').forEach(button => {
        button.addEventListener('click', function() {
            // Remove the active class from all buttons
            document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));

            // Add the active class to the clicked button
            this.classList.add('active');
        });
    });
</script>
