@extends('layouts.dash-window')

@section('content')
<div style="background-color: #9d2b29;">
    <div class="container bg-light bg-domino pb-4" >
        <div class="container">
            <div class="row align-items-start">
                <div class="col-12 col-md-6 mb-4 mb-md-0">
                    <img src="{{ asset('images/sponsors/domino-moments-sm.webp') }}"
                        class="img-fluid d-block mx-auto w-100 p-4"
                        alt="Domino Cigarette Company 'Moments'"
                        decoding="async"
                        width="1280"
                        height="292">
                    <p class="text-center text-muted fst-italic small mb-4">
                        'Moments' is a registered trademark of Domino Cigarettes Ltd &copy;3002
                    </p>
                    <h3 class="mx-4">There's a <span class="fst-italic">moment</span> for you.</h3>
                    <p class="mx-4">There&apos; a <span class="fst-italic">moment</span> for everyone with Domino Cigarettes Ltd&comma; the official partner of Craterview Casino &amp; Resort.</p>
                </div>
                <div class="col-12 col-md-6">
                <div class="d-flex justify-content-center w-100 p-4">
                    <div class="d-flex w-100">
                        <img src="{{ asset('images/logo.svg') }}"
                            class="img-fluid w-50"
                            alt="Craterview Logo">

                        <img src="{{ asset('images/sponsors/domino.webp') }}"
                            class="img-fluid w-50"
                            alt="Domino Cigarettes Ltd L0go">
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center mx-4">
            <div class="col-md-6">
                <img src="{{ asset('images/promos/domino-deal.webp') }}" class="img-fluid w-100 img-thumbnail" alt="Domino Cigarette Company Logo"
                loading="lazy" decoding="async" width="1280" height="292">
                <p class="text-muted fst-italic small mb-4">Mr P, CEO of Craterview &lpar;left&rpar; and Mr D, CEO of Domino Cigarettes Ltd &lpar;right&rpar; &copy;3000 courtesy of Craterview Archive</p>
                <h3><span class="fst-italic">Moments</span> like these...</h3>
                <p>Life is a series of <span class="fst-italic">moments</span>. Find your  <span class="fst-italic">moment</span> at Craterview Casino &amp; Resort, 
                and celebrate it by lighting up a Domino. Because when you light up a Domino at Craterview Casino &amp; Resort&comma; you celebrate your <span class="fst-italic">moment</span>.</p>
                <h3>One free Domino cigarette. On us&excl;</h3>
                <p class="small text-italic text-muted">One complimentary cigarette per guest. Subject to availability.</p>
                <p>As a token of appreciation for your continued loyalty, every member is entitled to receive one complimentary Domino cigarette during their stay. 
                    Because <span class="fst-italic">moments</span> like these deserve to be celebrated.
                </p>
                <div class="alert border-success border-4" style="background-color: #020088;; color: white;">
                    <p class="fw-bold mb-0">
                        To claim this promo, present your membership card to the hotel reception or to Guest Services inside the casino.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('images/promos/domino-poster.webp') }}" class="img-fluid img-thumbnail" alt="Poster: a man smoking a cigarette on Mars"
                loading="lazy" decoding="async" width="800" height="1143">
            </div>
        </div>
    </div> 
</div>
@endsection