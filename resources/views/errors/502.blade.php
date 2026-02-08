@extends('errors.layout')

@section('content')
    <p class="red">ERROR 502: BAD GATEWAY</p>
    <p class="text">The <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> server cannot reach the primary Mars server.</p>
    <p class="text">Please try again later.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Try again</button>
@endsection