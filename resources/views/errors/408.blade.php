@extends('errors.layout')

@section('content')
    <p class="red">ERROR 408: REQUEST TIMEOUT</p>
    <p class="text">Your request timed out before reaching the <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> server.</p>
    <p class="text">Please try again later.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Go back</button>
@endsection