@extends('errors.layout')

@section('content')
    <p class="red">ERROR 418: I'M A TEAPOT</p>
    <p class="text">This <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> server cannot brew coffee.</p>
    <p class="text">Please contact sales to purchase the BrewMaster7000-51b beverage processing add-on.</p>
    <button onclick="window.location.href='/'">Home page</button>
    <button onclick="window.history.back()">Go back</button>
@endsection