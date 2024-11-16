@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>{{ __('users.Users') }}</h1>
    <div class="card">
        <div class="card-header">{{ __('users.Manage_Users')}}</div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
@stop

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
