@extends('layouts.dash-window')

@section('content')

<div class="bg-cpanel">
    <div class="col-12 col-md-3 p-4">
        <div class="d-flex flex-column align-items-center gap-3 py-4 ps-1">
            <a href="{{ route('acc-panel.username.show') }}" class="dash-item">
                <img src="/images/icons/preconv/users.png"
                    class="img-fluid" width="64" height="64">
                <span class="d-block mt-2">Username</span>
            </a>
            <a href="{{ route('acc-panel.email.show') }}" class="dash-item">
                <img src="/images/icons/preconv/mail.png"
                    class="img-fluid" width="64" height="64">
                <span class="d-block mt-2">Email</span>
            </a>
            <a href="{{ route('acc-panel.region.show') }}" class="dash-item">
                <img src="/images/icons/mars.svg"
                    class="img-fluid" width="64" height="64">
                <span class="d-block mt-2">Region</span>
            </a>
            <a href="{{ route('acc-panel.password.show') }}" class="dash-item">
                <img src="/images/icons/preconv/padlock.png"
                    class="img-fluid" width="64" height="64">
                <span class="d-block mt-2">Password</span>
            </a>
            <!--
            <a href="#" class="dash-item">
                <img src="/images/icons/preconv/error.png"
                    class="img-fluid" width="64" height="64">
                <span class="d-block mt-2">Delete<br>Account</span>
            </a>
            -->
        </div>
    </div>
</div>

@endsection