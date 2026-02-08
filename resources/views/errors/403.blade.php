{{-- promably not required as redirects avoid this, but added as a fallback in case anything is missed --}}
@extends('errors.layout')

@section('content')
    <p class="red">ERROR 403: FORBIDDEN</p>
    <p class="text">You do not have the correct permissions to access this resource on the <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> server.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Go back</button>
@endsection