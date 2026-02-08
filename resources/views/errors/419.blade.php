@extends('errors.layout')

@section('content')
    <p class="red">ERROR 419: PAGE EXPIRED</p>
    <p class="text">This error likely occured because your session expired due to inactivity. You may have to log back in and try again.</p>
    <button onclick="window.location.href='/'">OK</button>
@endsection