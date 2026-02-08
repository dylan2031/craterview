@extends('errors.layout')

@section('content')
    <p class="red">ERROR 413: PAYLOAD TOO LARGE</p>
    <p class="text">The data you are attempting to send is too large for the <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> server.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Go back</button>
@endsection