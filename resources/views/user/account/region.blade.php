@extends('user.account.form-layout')

@php
    $icon = 'images/icons/mars.svg';
    $title = 'Region';
    $description = 'These are based on your interplanetary geo-location and cannot be modified.';
@endphp

@section('form')

    <p class="p-0 m-0 text-start">
        Planet:
    </p>

    <div class="text-box95 mb-3">
        <p class="p-0 m-0 text-start">
            Earth
        </p>
    </div>

    <p class="p-0 m-0 text-start">
        Time zone:
    </p>

    <div class="text-box95 mb-3">
        <p class="p-0 m-0 text-start">
            Earth Standard Time
        </p>
    </div>

    <p class="p-0 m-0 text-start">
        1 issue(s)!
    </p>

    <div class="text-box95">
        <p class="p-0 m-0 text-start">
            Satellite snapshot timestamp inconsistency detected.
            Reason: Unhandled Exception.
            <a href="{{ asset('files/log.txt') }}" download>
                See details.
            </a>
        </p>
    </div>

@endsection