@extends('errors.layout')

@section('content')
    <p class="red">ERROR 410: GONE</p>
    <p class="text">This resource has been permanently deleted from the <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> server.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Go back</button>
@endsection