@extends('errors.layout')

@section('content')
    <p class="red">ERROR 429: TOO MANY REQUESTS</p>
    <p class="text">You are sending requests to the <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> too quickly.</p>
    <p class="text">Please wait a few moments then try again.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Go back</button>
@endsection