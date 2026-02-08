@extends('errors.layout')

@section('content')
    <p class="red">ERROR 400: BAD REQUEST</p>
    <p class="text">The <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> detected your submission as invalid.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Go back</button>
@endsection