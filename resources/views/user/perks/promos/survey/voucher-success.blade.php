@extends('layouts.dash-window')

@section('content')
<div class="container">
    <div class="mt-4 text-center">
        <h1>Great news&excl; Your voucher is ready&excl;</h1>
        <p>Simply click the 'download' button to download it. Happy shopping&excl;</p>
    </div>

    <div class="row align-items-start mt-4">

        <div class="col-12 col-md-8">
            <div class="row g-0">
                <div class="col-6 col-md-3">
                    <img src="{{ asset('images/ads/download-red.webp') }}"
                        class="img-fluid p-1"
                        alt="torrent download"
                        data-bs-toggle="modal"
                        data-bs-target="#torrentModal"
                        style="cursor: pointer;"
                    >
                    @include('user.perks.promos.survey.inc.torrent')
                </div>

                <div class="col-6 col-md-3">
                    <img src="{{ asset('images/ads/download-green.webp') }}"
                        class="img-fluid p-1"
                        alt="download"
                        data-bs-toggle="modal"
                        data-bs-target="#brainChipModal"
                        style="cursor: pointer;"
                    >
                    @include('user.perks.promos.survey.inc.brain-chip')
                </div>

                <div class="col-6 col-md-3">
                    <img src="{{ asset('images/ads/download-blue.webp') }}"
                        class="img-fluid p-1"
                        alt="download"
                        data-bs-toggle="modal"
                        data-bs-target="#emailModal"
                        style="cursor: pointer;"
                    >
                    @include('user.perks.promos.survey.inc.email')
                </div>

                <div class="col-6 col-md-3">
                    <img src="{{ asset('images/ads/install-blue.webp') }}"
                        class="img-fluid p-1"
                        alt="install"
                        data-bs-toggle="modal"
                        data-bs-target="#captchaModal"
                        style="cursor: pointer;"
                    >
                    @include('user.perks.promos.survey.inc.captcha')
                </div>
            </div>
            <img src="{{ asset('images/ads/dermatologists-hate-her.jpg') }}"
                class="img-fluid p-1 w-100"
                alt="dermatologists hate her"
                data-bs-toggle="modal"
                data-bs-target="#dhrModal"
                style="cursor: pointer;"
            >
            @include('user.perks.promos.survey.inc.dermo')

            <div class="row g-0">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/ads/download-primary.webp') }}"
                        class="img-fluid p-1 w-100"
                        alt="download"
                        data-bs-toggle="modal"
                        data-bs-target="#quizModal"
                        style="cursor: pointer;"
                    >
                    @include('user.perks.promos.survey.inc.quiz')
                </div>
                <div class="col-12 col-md-6">
                    <div class="p-4">
                        <span class="text-success">✓ VERIFIED UPLOADS</span>
                        <br>
                        <span class="text-success">✓ SAFE AND SECURE</span>
                        <br>
                        <a href="{{ asset('files/ad/voucher.pdf') }}" download>&#128229;DOWNLOAD NOW &lpar;PDF&rpar;</a>
                        <br>
                        <a href="{{ asset('files/ad/formula.zip') }}">&#128229;DOWNLOAD NOW &lpar;.zip&rpar;</a>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/ads/big-john.jpg') }}"
                        class="img-fluid p-1 w-100"
                        alt="hot single dads in your area"
                        data-bs-toggle="modal"
                        data-bs-target="#dadModal"
                        style="cursor: pointer;"
                    >
                    @include('user.perks.promos.survey.inc.dad')
                </div>
                <div class="col-12 col-md-6">
                    <img src="{{ asset('images/ads/download-danger.webp') }}"
                        class="img-fluid p-1 w-100"
                        alt="download voucher.exe"
                        data-bs-toggle="modal"
                        data-bs-target="#720Modal"
                        style="cursor: pointer;"
                    >
                    @include('user.perks.promos.survey.inc.720')
                    <img src="{{ asset('images/ads/download-yellow.webp') }}"
                        class="img-fluid p-1 w-100"
                        alt="download"
                        data-bs-toggle="modal"
                        data-bs-target="#jumpscareModal"
                        style="cursor: pointer;"
                        id="downloadButton"
                    >

                    <audio id="clickSound">
                        <source src="{{ asset('audio/ad/dragon-studio-scary-scream-401725.mp3') }}" type="audio/mpeg">
                    </audio>

                    <script>
                    document.getElementById('downloadButton').addEventListener('click', function () {
                        document.getElementById('clickSound').play().catch(() => {});
                    });
                    </script>
                    @include('user.perks.promos.survey.inc.jumpscare')
                    
                    <img src="{{ asset('images/ads/download-retro.webp') }}"
                        class="img-fluid p-1 w-100"
                        alt="download"
                        data-bs-toggle="modal"
                        data-bs-target="#socialModal"
                        style="cursor: pointer;"
                    >
                    @include('user.perks.promos.survey.inc.social')
                </div>
            </div>

        </div>

        <div class="col-12 col-md-4">
            <div class="d-flex flex-column gap-3">
                <img src="{{ asset('images/ads/download-this-car.gif') }}"
                    class="img-fluid w-100 p-1"
                    alt="ad"
                    data-bs-toggle="modal"
                    data-bs-target="#downloadCarModal"
                    style="cursor: pointer;"
                >
                @include('user.perks.promos.survey.inc.download-car')

                <img src="{{ asset('images/ads/get-ripped.jpg') }}"
                    class="img-fluid w-100 p-1"
                    alt="get ripped in 4 weeks"
                    data-bs-toggle="modal"
                    data-bs-target="#getRippedModal"
                    style="cursor: pointer;"
                >
                @include('user.perks.promos.survey.inc.get-ripped')
                <div class="row g-0">
                    <div class="col-6">
                        <a href="/dashboard/news/today/top-5-holiday-destinations-3002">
                            <img src="{{ asset('images/ads/article.jpg') }}"
                                class="img-fluid p-1 w-100"
                                alt="article advertisement"
                            >
                        </a>
                    </div>

                    <div class="col-6">
                        <img src="{{ asset('images/ads/goat-see.gif') }}"
                            class="img-fluid p-1 w-100"
                            alt="goat see"
                            data-bs-toggle="modal"
                            data-bs-target="#goatModal"
                            style="cursor: pointer;"
                        >
                    </div>
                    @include('user.perks.promos.survey.inc.goat')
                </div>

            </div>
        </div>
    </div>
</div>

    @include('user.perks.promos.survey.inc.hh2')
    {{-- bottom ad --}}
    <div id="adContainer" 
        class="position-fixed bottom-0 start-50 translate-middle-x p-3 mb-3"
        style="z-index: 9999; max-width: 700px; width: 100%;">

        <!-- Close Button -->
        <button type="button"
                id="closeAd"
                class="btn btn-sm btn-dark position-absolute top-0 end-0 m-2 rounded-circle"
                aria-label="Close">
            ✕
        </button>

        <a href="#"><img src="/images/promos/human-origins-banner.webp"
            class="img-fluid rounded mb-3"
            alt="Human Origins Promo"
            data-bs-toggle="modal"
            data-bs-target="#humanOriginsModal"
            style="cursor: pointer;"
        >
        </a>
    </div>
    {{-- bottom ad script --}}
    <script>
        document.getElementById('closeAd').addEventListener('click', function () {
            document.getElementById('adContainer').style.display = 'none';
        });
    </script>
@endsection