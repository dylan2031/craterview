@extends('errors.layout')

@section('content')
    <p class="red">ERROR 409: CONFLICT</p>
    <p class="text">Your request conflicts with the current state of data on the <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> server.</p>
    <p class="text">The attempted action cannot be completed at this time.</p>
    <button onclick="window.location.href='/'">OK</button>
@endsection