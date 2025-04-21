<div class="col">
    <div class="card h-100">
        <img src="{{ asset('images/entertainment/' . $item['image']) }}" class="card-img-top" alt="{{ $item['name'] }}">
        @if($item['featured'])
            <span class="badge bg-primary position-absolute top-0 start-0 m-2">Featured</span>
        @endif
        @if($item['included_in_pass'])
            <span class="position-absolute top-0 end-0 m-2">
                <p class="d-inline" style="color: #FFEA00; text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.7), 0 0 25px rgba(255, 255, 255, 0.8);">
                    <small>
                        Included with 
                        <img src="{{ asset('images/entertainment/funpass.png') }}" alt="FunPass" class="img-fluid d-inline">™
                    </small>
                </p>
            </span>         
        @endif
        <div class="card-header">
            <h5 class="card-title text-center">{{ $item['name'] }}</h5>
            <p class="card-text text-center text-muted"><small><i class="bi bi-geo-alt-fill"></i> {{ $item['location'] }}</small></p>
        </div>                        
        <div class="card-body">
            <p>{{ Str::limit($item['description'], 132) }}</p>
            <p>
                <a href="{{ route('entertainment.show', ['slug' => Str::slug($item['name'])]) }}" class="btn xp-btn-secondary w-100">Read more</a>
            </p>
            <div class="row">
                <div class="col-md-6">
                    @php
                        $priceLabel = ['Free', 'Cheap', 'Reasonable', 'Deluxe'][$item['price']] ?? 'Unknown';
                    @endphp
                    <p class="card-text text-center"><small><strong>&Omega;</strong> {{ $priceLabel }}</small></p>
                </div>
                <div class="col-md-6">
                    <p class="card-text text-center"><small><i class="bi bi-cake2-fill"></i> {{ $item['age_suitability'] }}</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
