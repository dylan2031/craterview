@extends('layouts.dash-window')

@section('content')

<style>
@keyframes flashColor {
  0%   { color: #87CEFA; }
  50%  { color: #144e9b; }
  100% { color: #87CEFA; }
}

.flash {
  animation: flashColor 0.7s infinite;
}

@keyframes hshake {
  0%   { transform: translate(0, 0); }
  20%  { transform: translate(-2px, 1px); }
  40%  { transform: translate(2px, -1px); }
  60%  { transform: translate(-2px, -1px); }
  80%  { transform: translate(2px, 1px); }
  100% { transform: translate(0, 0); }
}

.h-shake {
  display: inline-block; /* important so transform works cleanly */
  animation: hshake 0.4s infinite;
}

</style>

<div class="giveaway-bg text-center text-light giveaway-wrapper" style="font-family: Permanent Marker;">
    @include('user.perks.giveaway.enter')
    <br>
    <div class="justify-content-center text-center">
        <h1 class="pt-4 display-1 h-shake" style="font-family: Permanent Marker;">THIS MONTH&apos;S GIVEAWAY</h1>
        <p style="color:yellow;text-shadow: 4px 2px 0 black, -2px -1px 0 black;">
            <span style="font-size:20px;">ONE<span style="font-size:45px;"> THOUSAND </span>CANS</span>
            <br>
            <span style="color:black;text-shadow:none;">OF UNCLE FOOEY&apos;S</span>
            <br>
            <span style="font-size:35px;">
                <span class="flash">QUANTUM</span> <span style="color:red;">COLA</span>
            </span>
        </p>
        <img src="{{ asset('images/giveaway/can.webp') }}" class="img-fluid d-block mx-auto" alt="cola product"
        loading="lazy" decoding="async"/>
        <br>
        <a href="#" class="btn xp-btn-primary flash mb-5" data-bs-toggle="modal" data-bs-target="#giveawayModal">
            CLICK TO ENTER GIVEAWAY
        </a>
    </div>
<a href="#" class="btn xp-btn-secondary mb-5" id="learn-more-btn">
    LEARN MORE
</a>
    <div id="learn-more-content" style="display:none;">
        @include('user.perks.giveaway.more')
    </div>
    <script>
    document.getElementById('learn-more-btn').addEventListener('click', function (e) {
        e.preventDefault();

        const box = document.getElementById('learn-more-content');

        if (box.style.display === 'none' || box.style.display === '') {
            box.style.display = 'block';
        } else {
            box.style.display = 'none';
        }
    });
    </script>
</div>


<div class="modal fade xp-modal" id="giveawayModal" tabindex="-1" aria-labelledby="giveawayModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="xp-title-bar px-3 py-2 d-flex align-items-center position-relative">
                <img src="{{ asset('images/icons/extranet.svg') }}" alt="Mars Icon" class="me-2" style="width: 18px; height: 18px;">
                <span>Extranet Explorer &copy; 3002</span>
                <img src="{{ asset('images/icons/close.png') }}" alt="Close" class="close position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close" style="cursor:pointer;">
            </div>

            <div class="modal-body bg-light text-center">
                <p>Entries are now closed.</p>
                <h2 class="mb-3">WINNER ANNOUNCED</h2>
                <p class="fw-bold">Huge congratulations to Bob and Maureen from Earth&excl;</p>
                <img src="{{ asset('images/giveaway/winners.webp') }}" class="img-fluid d-block mx-auto w-75" alt="competition winners.">
                <p class="mt-4">Join us for our next giveaway on Monday 6th December 3002!</p>
                <p>Next prize&colon;</p>
                <p>TBA</p>
            </div>

        </div>
    </div>
</div>

@endsection