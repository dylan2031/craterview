<nav aria-label="Dashboard sub navigation">
    <div>
        <ul class="nav nav-tabs nav-fill flex-nowrap custom-tabs">
            <li class="nav-item">
                <button class="nav-link active" data-section="reservations">
                    <img src="{{ asset('images/icons/dashboard-reservations.svg') }}" width="32" height="32" class="img-fluid">
                    Manage Reservations
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-section="payments">
                    <img src="{{ asset('images/icons/dashboard-payments.svg') }}" width="32" height="32" class="img-fluid">
                    Payment History
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-section="settings">
                    <img src="{{ asset('images/icons/dashboard-settings.svg') }}" width="32" height="32" class="img-fluid">
                    Account Settings
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
