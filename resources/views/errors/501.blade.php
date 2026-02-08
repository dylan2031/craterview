@extends('errors.layout')

@section('content')
    <p class="red">ERROR 501: NOT IMPLEMENTED</p>
    <p class="text">The <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> cannot peform the requested action.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Go back</button>
@endsection