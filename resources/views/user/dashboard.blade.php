@extends('layouts.app')

@section('content')
    <div class="background-dash text-light p-1 p-md-5">
        <h1>Your dashboard</h1>
        @include('user.dashcat.greet')
        <h2>Reservations</h2>
        @include('user.dashcat.reso')
        <h2>Member perks</h2>
        @include('user.dashcat.perks')
        <h2>Settings</h2>
        @include('includes.under-construction')
    </div>
@endsection