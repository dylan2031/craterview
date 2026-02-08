@extends('errors.layout')

@section('content')
    <p class="red">ERROR 422: UNPROCESSABLE ENTITY</p>
    <p class="text">The <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> cannot process your submission.</p>
    <p class="text">Please double check your inputs and try again.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Go back</button>
@endsection