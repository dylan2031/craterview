@extends('errors.layout')

@section('content')
    <p class="red">ERROR 507: INSUFFICIENT STORAGE</p>
    <p class="text">There is not enough space available on the <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> USB hard drive.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Go back</button>
@endsection