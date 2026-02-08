@extends('errors.layout')

@section('content')
    <p class="red">ERROR 415: UNSUPPORTED MEDIA TYPE</p>
    <p class="text">This type of media is not supported by the <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> server.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Go back</button>
@endsection