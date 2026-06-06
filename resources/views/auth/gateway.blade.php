@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card xp-wrap">

                {{-- Title bar (system identity) --}}
                <div class="xp-title-bar text-center"></div>

                <div class="card-body bg-light text-center py-5">

                    <h3 class="mb-2">
                        Welcome
                    </h3>

                    {{-- extra context/guide --}}
                    <p class="text-muted mb-4">
                        Do you have an account with us&quest;
                    </p>

                    {{-- Primary actions --}}
                    <div class="d-grid gap-3 col-10 mx-auto">

                        <a href="{{ route('login') }}" class="btn xp-btn-secondary btn-lg">
                            Log in
                        </a>

                        <a href="{{ route('register') }}" class="btn xp-btn-secondary btn-lg">
                            Create a new account
                        </a>

                    </div>

                    {{-- Small secondary escape route --}}
                    <div class="mt-4">
                        <a href="{{ url('/') }}" class="text-muted small">
                            Return to homepage
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection