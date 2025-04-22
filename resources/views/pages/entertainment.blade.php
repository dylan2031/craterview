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
<section id="results">
    <form action="{{ route('entertainment.search') }}" method="GET">
    <div class="container mt-3">
        <div class="row d-flex align-items-center">
            <!-- search bar -->
            <div class="col-md-8">
                <div class="input-group w-100">
                    <input type="text" name="query" class="form-control " placeholder="Search entertainment..." aria-label="Search entertainment">
                </div>
            </div>
    
            <!-- sort by -->
            <div class="col-md-2">
                <div class="input-group w-100">
                    <select class="form-select" id="inlineFormCustomSelect" name="sort">
                        <option value="" {{ request('sort') == '' ? 'selected' : '' }} disabled>-- Sort by --</option>
                        <option value="featured" {{ request('sort') == 'featured' ? 'selected' : '' }}>Featured</option>
                        <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Price: Lowest First</option>
                        <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Price: Highest First</option>
                    </select>
                </div>
            </div>
            
            <div class="col-md-2 d-flex justify-content-center">
                <small>
                <!-- submit -->
                <button type="submit" class="btn xp-btn-secondary"><i class="bi bi-search"></i> Search</button>
                
                <!-- options -->
                <button type="button" class="btn xp-btn-secondary" data-bs-toggle="collapse" data-bs-target="#filterOptions">
                    <i class="bi bi-gear"></i>
                </button>
                
                </small>
            </div>
        </div>

        <!-- filter options -->
        <div id="filterOptions" class="collapse mt-3">
            <div class="row m-4">
                <div class="col-md-4 form-check">
                    <input name="included_in_pass[]" value="true" class="form-check-input" type="checkbox" id="funPassFilter" aria-expanded="false" aria-controls="filterOptions">
                    <label class="form-check-label" for="funPassFilter">
                        Included in FunPass
                    </label>
                    <br><br>
                    <p><small>Age Suitability</small></p>
                    <input name="age_suitability[]" value="All ages" class="form-check-input" type="checkbox" id="allAges" aria-expanded="false" aria-controls="filterOptions">
                    <label class="form-check-label" for="allAges">
                        All ages
                    </label>
                    <br>
                    <input name="age_suitability[]" value="Ages 13 and up" class="form-check-input" type="checkbox" id="teens" aria-expanded="false" aria-controls="filterOptions">
                    <label class="form-check-label" for="teens">
                        Teens
                    </label>
                    <br>
                    <input name="age_suitability[]" value="Adults" class="form-check-input" type="checkbox" id="adults" aria-expanded="false" aria-controls="filterOptions">
                    <label class="form-check-label" for="adults">
                        Adults
                    </label>
                </div>
                <div class="col-md-4 form-check">
                    <p><small>Category</small></p>
                    <input name="category[]" value="amusement" class="form-check-input" type="checkbox" id="amusement" aria-expanded="false" aria-controls="filterOptions">
                    <label class="form-check-label" for="amusement">
                        Amusement
                    </label>
                    <br>
                    <input name="category[]" value="gambling" class="form-check-input" type="checkbox" id="gambling" aria-expanded="false" aria-controls="filterOptions">
                    <label class="form-check-label" for="gambling">
                        Gambling
                    </label>
                    <br>
                    <input name="category[]" value="shopping" class="form-check-input" type="checkbox" id="shopping" aria-expanded="false" aria-controls="filterOptions">
                    <label class="form-check-label" for="shopping">
                        Shopping
                    </label>
                    <br>
                    <input name="category[]" value="exhibition" class="form-check-input" type="checkbox" id="exhibition" aria-expanded="false" aria-controls="filterOptions">
                    <label class="form-check-label" for="exhibition">
                        Exhibition
                    </label>
                    <br>
                    <input name="category[]" value="excursion" class="form-check-input" type="checkbox" id="excursion" aria-expanded="false" aria-controls="filterOptions">
                    <label class="form-check-label" for="excursion">
                        Excursion
                    </label>
                </div>
                <div class="col-md-4 form-check">
                    <p><small>Locations</small></p>
                    <input name="location[]" value="Main Building" class="form-check-input" type="checkbox" id="mainBuilding" aria-expanded="false" aria-controls="filterOptions">
                    <label class="form-check-label" for="mainBuilding">
                        Main Building
                    </label>
                    <br>
                    <input name="location[]" value="Pavilion" class="form-check-input" type="checkbox" id="pavilion" aria-expanded="false" aria-controls="filterOptions">
                    <label class="form-check-label" for="pavilion">
                        Pavilion
                    </label>
                    <br>
                    <input name="location[]" value="The Strip™" class="form-check-input" type="checkbox" id="theStrip" aria-expanded="false" aria-controls="filterOptions">
                    <label class="form-check-label" for="theStrip">
                        The Strip™
                    </label>
                    <br>
                    <input name="location[]" value="Nebula Park" class="form-check-input" type="checkbox" id="nebulaPark" aria-expanded="false" aria-controls="filterOptions">
                    <label class="form-check-label" for="nebulaPark">
                        Nebula Park
                    </label>
                    <br>
                    <input name="location[]" value="The Crater" class="form-check-input" type="checkbox" id="theCrater" aria-expanded="false" aria-controls="filterOptions">
                    <label class="form-check-label" for="theCrater">
                        The Crater
                    </label>
                </div>

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
