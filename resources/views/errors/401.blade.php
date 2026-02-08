{{-- promably not required as redirects avoid this, but added as a fallback in case anything is missed --}}
@extends('errors.layout')

@section('content')
    <p class="red">ERROR 401: UNAUTHORISED</p>
    <p class="text">The <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> requires that you log in to access this page.</p>
    <button onclick="window.location.href='/login'">Log in</button>
    <button onclick="window.history.back()">Go back</button>
@endsection