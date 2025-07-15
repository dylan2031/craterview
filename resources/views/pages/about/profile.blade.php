@extends('layouts.app')

@section('content')
@include('includes.back-button')
<div class="container py-5">
    <div class="row align-items-start">
        <div class="col-12 col-md-4 mb-4 mb-md-0 text-center">
            <img src="{{ asset('images/team/' . $member['image']) }}" class="img-fluid img-thumbnail" alt="{{ $member['alias'] }}">
        </div>
        <div class="col-12 col-md-8">
            <h1>{{ $member['alias'] }}</h1>
            <h5 class="text-muted">{{ $member['position'] }}</h5>
            <p>{{ $member['bio'] }}</p>
        </div>
    </div>
</div>
<div class="container">
    <h3>Information</h3>
    <table class="table table-bordered w-100 mt-4">
        <tbody>
            <tr>
                <th scope="row" class="text-start">Model</th>
                <td class="text-start">{{ $member['model'] }}</td>
            </tr>
            @php
                $statusClass = match(strtolower($member['status'])) {
                    'active' => 'text-success',
                    'suboptimal' => 'text-warning',
                    'not active', 'inactive' => 'text-danger',
                    default => '',
                };
            @endphp
            <tr>
                <th scope="row" class="text-start">Status</th>
                <td class="text-start {{ $statusClass }}">{{ $member['status'] }}</td>
            </tr>
            <tr>
                <th scope="row" class="text-start">Date Appointed</th>
                <td class="text-start">{{ $member['date'] }}</td>
            </tr>
            <tr>
                <th scope="row" class="text-start">Last maintenance</th>
                <td class="text-start">{{ $member['maintenance'] }}</td>
            </tr>
        </tbody>
    </table>    
</div>
@endsection
