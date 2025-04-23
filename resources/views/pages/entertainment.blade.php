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
                    <input type="text" name="query" value="{{ request('query') }}" class="form-control " placeholder="Search entertainment..." aria-label="Search entertainment">
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
                    <input name="included_in_pass[]" value="true" class="form-check-input" type="checkbox" id="funPassFilter" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('true', request('included_in_pass', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="funPassFilter">
                        Included in FunPass
                    </label>
                    <br><br>
                    <p><small>Age Suitability</small></p>
                    <input name="age_suitability[]" value="All ages" class="form-check-input" type="checkbox" id="allAges" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('All ages', request('age_suitability', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="allAges">
                        Children
                    </label>
                    <br>
                    <input name="age_suitability[]" value="Ages 13 and up" class="form-check-input" type="checkbox" id="teens" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('Ages 13 and up', request('age_suitability', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="teens">
                        Teens
                    </label>
                    <br>
                    <input name="age_suitability[]" value="Adults" class="form-check-input" type="checkbox" id="adults" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('Adults', request('age_suitability', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="adults">
                        Adults
                    </label>
                </div>
                <div class="col-md-4 form-check">
                    <p><small>Category</small></p>
                    <input name="category[]" value="amusement" class="form-check-input" type="checkbox" id="amusement" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('amusement', request('category', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="amusement">
                        Amusement
                    </label>
                    <br>
                    <input name="category[]" value="gambling" class="form-check-input" type="checkbox" id="gambling" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('gambling', request('category', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="gambling">
                        Gambling
                    </label>
                    <br>
                    <input name="category[]" value="shopping" class="form-check-input" type="checkbox" id="shopping" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('shopping', request('category', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="shopping">
                        Shopping
                    </label>
                    <br>
                    <input name="category[]" value="nightlife" class="form-check-input" type="checkbox" id="nightlife" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('nightlife', request('category', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="nightlife">
                        Nightlife
                    </label>
                    <br>
                    <input name="category[]" value="exhibition" class="form-check-input" type="checkbox" id="exhibition" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('exhibition', request('category', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="exhibition">
                        Exhibition
                    </label>
                    <br>
                    <input name="category[]" value="excursion" class="form-check-input" type="checkbox" id="excursion" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('excursion', request('category', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="excursion">
                        Excursion
                    </label>
                </div>
                <div class="col-md-4 form-check">
                    <p><small>Locations</small></p>
                    <input name="location[]" value="Main Building" class="form-check-input" type="checkbox" id="mainBuilding" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('Main Building', request('location', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="mainBuilding">
                        Main Building
                    </label>
                    <br>
                    <input name="location[]" value="Pavilion" class="form-check-input" type="checkbox" id="pavilion" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('Pavilion', request('location', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="pavilion">
                        Pavilion
                    </label>
                    <br>
                    <input name="location[]" value="The Strip™" class="form-check-input" type="checkbox" id="theStrip" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('The Strip™', request('location', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="theStrip">
                        The Strip™
                    </label>
                    <br>
                    <input name="location[]" value="Nebula Park" class="form-check-input" type="checkbox" id="nebulaPark" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('Nebula Park', request('location', [])) ? 'checked' : '' }}>
                    <label class="form-check-label" for="nebulaPark">
                        Nebula Park
                    </label>
                    <br>
                    <input name="location[]" value="The Crater" class="form-check-input" type="checkbox" id="theCrater" aria-expanded="false" aria-controls="filterOptions"
                    {{ in_array('The Crater', request('location', [])) ? 'checked' : '' }}>
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
            <p>
                Search results{{ request('query') ? ' for "' . request('query') . '"' : '' }}:
            </p>            
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($filtered as $item)
                    <div class="entertainment-card">
                        @include('partials.entertainment-card', ['item' => $item])
                    </div>
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
                    <div class="entertainment-card">
                        @include('partials.entertainment-card', ['item' => $item])
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- Pagination Controls -->
    <div id="pagination-controls" class="d-flex justify-content-center mt-4"></div>

    {{-- 
        Laravel's built-in paginator (e.g., paginate(), LengthAwarePaginator()) doesn't work with this setup 
        because we're loading entertainment data from a JSON file instead of querying a database.

        I spent hours trying to get this to work with Laravel/PHP, but it wasn't working. I wanted to use Laravel/PHP
        for a few reasons — mainly because my PHP skills are much stronger than my JavaScript, and I also wanted 
        consistency in the language used across the entertainment page search/display functionalities. I used paginate()
        successfully before with database content during university, and it was simple — but as far as I can tell, the
        same rules don’t apply when working with JSON. As far as I can tell, paginate() expects a database query or Eloquent model.

        So instead, I’m handling pagination entirely with JavaScript.
    --}}

</section>

<script src="{{ asset('js/entertainment-pagination.js') }}"></script>

@if(isset($scrollTo))
    <script>
        //this script makes the page scroll to the search results after searching instead of defaulting to the top of the page
        window.onload = () => {
            const el = document.getElementById("{{ $scrollTo }}");
            if (el) {
                el.scrollIntoView(); // ← this makes it snap
            }
        };
    </script>
@endif


@endsection
