@extends('errors.layout')

@section('content')
    <p class="red">ERROR 414: URL TOO LONG</p>
    <p class="text">The requested URL is too long for the <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> server to process.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Go back</button>
@endsection