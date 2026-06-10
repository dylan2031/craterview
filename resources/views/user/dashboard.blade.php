@extends('layouts.app')

@section('content')
    <div class="background-dash text-light p-1 p-md-5">

        <div class="container-fluid">
            <div class="row g-3">

                {{-- Dashboard title --}}
                <div class="col-12">
                    <h1>Your dashboard</h1>
                </div>

                {{-- Greet (always full width) --}}
                <div class="col-12">
                    @include('user.dashcat.greet')
                </div>

                {{-- Reservations --}}
                <div class="col-12 col-lg-6">
                    <h2>Reservations</h2>
                    @include('user.dashcat.reso')
                    <br>{{-- br needed for even spacing --}}
                </div>

                {{-- Perks --}}
                <div class="col-12 col-lg-6">
                    <h2>Member perks</h2>
                    @include('user.dashcat.perks')
                </div>

                {{-- Settings --}}
                <div class="col-12 col-lg-6">
                    <h2>Settings</h2>
                    @include('user.dashcat.settings')
                </div>

            </div>
        </div>

    </div>
@endsection