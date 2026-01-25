<div class="xp-window side-panel" style="
    position: fixed; top: 100px; right: 20px; width: 300px;
    border: 2px solid #aaa; background: #eee; z-index: 10;
">
    <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">
        <img src="{{ asset('images/icons/about.svg') }}" alt="Icon" class="me-2" style="width: 18px; height: 18px;">
        <span>View your instant response</span>
        <img
            src="{{ asset('images/icons/close.png') }}"
            alt="Close"
            class="position-absolute top-0 end-0"
            style="cursor: pointer;"
            onclick="this.closest('.side-panel').style.display='none';"
        />
    </div>
    <div class="xp-body p-2">
        <h5 class="text-center" style="font-family: sans-serif;">
            We C.A.R.E
        </h5>
        <p class="text-center" style="font-family: sans-serif;">
            <small style="font-family: sans-serif;">
            Computer Automate Review Evaluations<br>Completed in &lt;0.8 seconds
            </small>
        </p>
        <div class="d-flex flex-column flex-md-row justify-content-center gap-3 text-light mx-auto">
        @php
            use Illuminate\Support\Facades\DB;

            $urlReview = DB::table('reviews')
                ->where('user_id', auth()->id())
                ->orderByDesc('created_at')
                ->first();
        @endphp
            <a href="/reviews/{{$urlReview->id}}" class="btn xp-btn-secondary">View Response</a>
        </div>
    </div>
</div>