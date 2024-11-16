@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>{{ __('users.Users') }}</h1>
    <div class="card">
        <div class="card-body">
            <a href="{{ route('users.create') }}" class="btn btn-primary">Crear</a>
            <a href="{{ route('users.create') }}" class="btn btn-info">Importar</a>
            {{ $dataTable->table() }}
        </div>
    </div>
@stop

@push('scripts')

    {{ $dataTable->scripts() }}
@endpush
