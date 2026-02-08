@extends('errors.layout')

@section('content')
    <p class="red">ERROR 504: GATEWAY TIMEOUT</p>
    <p class="text"><b>SpaceSync™ DataCore Satellite (ID: VM-01)</b>&apos; connection with the primary server on Mars timed out.</p>
    <p class="text">Please try again later.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Go back</button>
@endsection