@extends('errors.layout')

@section('content')
    <p class="red">ERROR 404: PAGE NOT FOUND</p>
    <p class="text">The requested URL does not exist on this <b>SpaceSync™ DataCore Satellite (ID: VM-01)</b> server.</p>
    <div class="text-box">
        <span class="faq">
            <p>FAQ: I previously accessed this page on Mars. Where did it go?</p>
            <p>This snapshot is synchronised with the primary Mars server every 10 business days. Please allow time for the update to reach your location.</p>
        </span>
    </div>
@endsection