@extends('layouts.app')

@section('content')
    <div class="background-dash text-light p-5">
        <h1>Your dashboard</h1>
        @include('user.dashcat.greet')
        <h2>Reservations</h2>
        @include('user.dashcat.reso')
        <h2>Member perks</h2>
        <p>Coming soon!</p>
        <h2>Settings</h2>
        <p>Content here</p>
    </div>
@endsection