@extends('user.account.form-layout')

@php
    $icon = 'images/icons/preconv/mail.png';
    $title = 'Email';
    $description = 'An email address is optional and used only for reservation confirmations and account recovery. You may leave this blank to opt out.';
@endphp

@section('form')

<form method="POST"
        action="{{ route('acc-panel.email.update') }}" novalidate>

    @csrf

    <div class="mb-3">
        <label for="email"
                class="form-label">
            Email
        </label>

        <input
            type="text"
            class="form-control"
            id="email"
            name="email"
            maxlength="32"
            value="{{ old('email', auth()->user()->email) }}"
            autofocus>

        <small class="text-muted">
            
        </small>
    </div>

    <div class="text-center mt-4">
        <button type="submit"
                class="btn xp-btn-secondary">
            Apply
        </button>
    </div>

</form>

@endsection