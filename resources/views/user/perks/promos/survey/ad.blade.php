@extends('layouts.dash-window')

@section('content')
<div class="container mt-4 text-center">

    <h5>Great news&excl; Your FREE voucher is almost ready&excl;</h5>
    <p>Watch this short advertisement to continue.</p>

    <div class="mt-4">
        <video
            id="adVideo"
            width="100%"
            style="max-width: 800px; cursor: pointer;"
            poster="{{ asset('images/promos/play-ad.webp') }}"
            playsinline
        >
            <source src="{{ asset('videos/human_origins.mp4') }}" type="video/mp4">
            <source src="{{ asset('videos/human_origins.webm') }}" type="video/webm">
        </video>
    </div>
    <p class="text-muted" style="font-size: 0.5rem; line-height: 1.4;">
        Trailer sound effects:<br>
        Pixabay | freesound_community, DRAGON-STUDIO<br><br>
        Trailer music:<br>
        Phonk Powerful | Fury by Alex-Productions<br>
        https://youtu.be/JQEwwxRoAlg<br>
        Music promoted by https://onsound.eu/
    </p>

    <div id="buttonContainer" class="mt-4"></div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const video = document.getElementById('adVideo');
    const buttonContainer = document.getElementById('buttonContainer');

    let lastTime = 0;
    let started = false;

    // Click video to play (since no controls exist)
    video.addEventListener('click', function () {
        if (!started) {
            started = true;
            video.play();
        }
    });

    // Track progress
    video.addEventListener('timeupdate', function () {
        lastTime = video.currentTime;
    });

    // Prevent seeking
    video.addEventListener('seeking', function () {
        if (Math.abs(video.currentTime - lastTime) > 0.2) {
            video.currentTime = lastTime;
        }
    });

    // Prevent pause
    video.addEventListener('pause', function () {
        if (!video.ended) {
            video.play();
        }
    });

    // Show continue ONLY when finished
    video.addEventListener('ended', function () {
        buttonContainer.innerHTML = `
            <div class="d-flex justify-content-center">
            <a href="#" class="btn xp-btn-primary"
            data-bs-toggle="modal"
            data-bs-target="#humanOriginsModal">
                PLAY NOW
            </a>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <a href="/dashboard/promos/voucher-success">
                    Remind me later
                </a>
            </div>
        `;
    });

});
</script>

@include('user.perks.promos.survey.inc.hh')


@endsection