@extends('user.account.form-layout')

@php
    $icon = 'images/icons/preconv/padlock.png';
    $title = 'Password';
    $description = 'Update your password. Reminder: the majority of users choose emotionally significant identifiers. Craterview recommends emotional detachment for optimal security performance.';
@endphp

@section('form')

<form method="POST"
      action="{{ route('cpanel.password.update') }}">

    @csrf

    {{-- current password --}}
    <div class="mb-3">
        <label for="current_password" class="form-label">
            Current Password
        </label>

        <input
            type="password"
            class="form-control"
            id="current_password"
            name="current_password"
            autocomplete="current-password"
            required>
    </div>

    {{-- new password --}}
    <div class="mb-3">
        <label for="password" class="form-label">
            New Password
        </label>

        <input
            type="password"
            class="form-control"
            id="password"
            name="password"
            autocomplete="new-password"
            required>
    </div>

    {{-- confirm password --}}
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">
            Confirm New Password
        </label>

        <input
            type="password"
            class="form-control"
            id="password_confirmation"
            name="password_confirmation"
            autocomplete="new-password"
            required>
    </div>

    {{-- submit --}}
    <div class="text-center mt-4">
        <button type="submit" class="btn xp-btn-secondary">
            Apply
        </button>
    </div>

</form>

@endsection