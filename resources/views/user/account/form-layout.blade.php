@extends('layouts.dash-window')

@section('content')

<div class="bg-cpanel py-4">
    <div class="box95 w-100">

        <div class="titlebar-95 d-flex align-items-center px-2">
            <a href="{{ route('cpanel') }}"
               class="win95-back d-inline-flex align-items-center text-decoration-none text-light">

                <img src="{{ asset('images/icons/back.svg') }}"
                     width="16"
                     class="me-1">

                Back to Control Panel
            </a>
        </div>

        <div class="p-4">

            <div class="text-center mb-4">

                <img src="{{ asset($icon) }}"
                     width="64"
                     height="64"
                     class="img-fluid">

                <h2 class="mt-3 mb-2">
                    {{ $title }}
                </h2>

                <p class="mb-0">
                    {{ $description }}
                </p>

            </div>

            @yield('form')

        </div>

    </div>
</div>

@endsection