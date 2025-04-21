@extends('layouts.app')

@section('content')
<section class="position-relative text-center text-light">
    <img 
        src="{{ asset('images/entertainment/ent.png') }}" 
        class="img-fluid w-100" 
        style="object-fit: cover; height: 80vh;" 
        alt="Craterview Lobby"
    >

    <div class="position-absolute top-50 start-50 translate-middle w-100 px-3">
        <h1 class="mb-2">Entertainment</h1>
        <img src="{{ asset('images/entertainment/ent-wordart.png') }}" alt="dream big, play bigger" class="img-fluid mx-auto d-block">   
        <h5 class="mb-3">The ultimate 3-star destination for things to do.</h5>
        <h5 class="mb-3">The excitement, adventure, and gambling never stops at Craterview's out-of-this-world entertainment hub.</h5>
    </div>
</section>
<section id="search">
    <form action="{{ route('entertainment.search') }}" method="GET">
    <div class="container mt-3">
        <div class="row d-flex align-items-center">
            <!-- search bar -->
            <div class="col-md-8">
                <div class="input-group w-100">
                    <input type="text" name="search" class="form-control " placeholder="Search entertainment..." aria-label="Search entertainment">
                </div>
            </div>
    
            <!-- sort by -->
            <div class="col-md-2">
                <div class="input-group w-100">
                    <select class="form-select" id="inlineFormCustomSelect">
                        <option selected>-- Sort by --</option>
                        <option value="1">Featured</option>
                        <option value="2">Price Low to High</option>
                        <option value="3">Price High to Low</option>
                      </select>
                </div>
            </div>
    
            <!-- submit -->
            <div class="col-md-2 d-flex justify-content-center">
                <small>
                <button type="submit" class="btn xp-btn-secondary"><i class="bi bi-search"></i> Search</button>
                <button type="3" class="btn xp-btn-secondary"><i class="bi bi-gear"></i></button>
                </small>
            </div>
        </div>
        
    </div>
</form>
    
</section>
<section>
    @if(isset($filtered) && count($filtered) > 0)
        <div class="container">
            <p>Search results:</p>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($filtered as $item)
                    @include('partials.entertainment-card', ['item' => $item])
                @endforeach
            </div>
        </div>
    @elseif(isset($filtered))
        <div class="container">
            <p>No results found.</p>
        </div>
    @endif

    @if(!isset($filtered))
        <div class="container">
            <br>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($entertainment as $item)
                    @include('partials.entertainment-card', ['item' => $item])
                @endforeach
            </div>
        </div>
    @endif
</section>
@if(isset($scrollTo))
    <script>
        window.onload = () => {
            const el = document.getElementById("{{ $scrollTo }}");
            if (el) {
                el.scrollIntoView(); // ← this makes it snap
            }
        };
    </script>
@endif


@endsection
