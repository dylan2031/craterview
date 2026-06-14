@extends('user.account.form-layout')

@php
    $icon = 'images/icons/preconv/users.png';
    $title = 'Username';
    $description = 'Unlimited username changes are included with your membership. No fees will be applied.';
@endphp

@section('form')

<form method="POST"
      action="{{ route('acc-panel.username.update') }}" novalidate>

    @csrf

    <div class="mb-3">
        <label for="username" class="form-label">
            Username
        </label>

        <input
            type="text"
            class="form-control"
            id="username"
            name="username"
            maxlength="32"
            value="{{ old('username', auth()->user()->display_name) }}"
            autofocus>

        <small class="text-muted">
            Maximum length: 32 characters
        </small>
    </div>

    <div class="text-center mt-4">
        <button type="submit" class="btn xp-btn-secondary">
            Apply
        </button>
    </div>

</form>

@endsection