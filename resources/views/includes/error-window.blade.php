<div class="modal fade xp-modal" id="errorModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-m">
        <div class="modal-content">

            <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">
                <img src="{{ asset('images/icons/preconv/error.png') }}" alt="Mars Icon" class="me-2" style="width: 18px; height: 18px;">
                <span>Error</span>
                <img src="{{ asset('images/icons/close.png') }}" alt="Close" class="close position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close">
            </div>

            <div class="modal-body bg-light text-dark text-center px-3 py-4">

            <h5 style="font-family: sans-serif;">
                <img src="{{ asset('images/icons/preconv/error.png') }}" width="32">
                @if ($errors->count() > 1)
                    Multiple errors
                @else
                     {{ $errors->first() }}
                @endif
            </h5>

                <ul class="list-unstyled mt-3">
                    @if ($errors->count() > 1)
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    @endif
                </ul>

                <button class="btn xp-btn-secondary mt-3" data-bs-dismiss="modal">
                    OK
                </button>

            </div>

        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const el = document.getElementById('errorModal');
    if (!el) return;

    const modal = new bootstrap.Modal(el);
    modal.show();
});
</script>