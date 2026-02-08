@extends('errors.layout')

@section('content')
    <p class="red">ERROR 405: METHOD NOT ALLOWED</p>
    <p class="text">The <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> server does not allow that request.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Go back</button>
@endsection