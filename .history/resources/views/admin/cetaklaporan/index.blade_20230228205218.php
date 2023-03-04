@extends('layouts.app')
@section('title', 'Cetak Laporan')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">Manage Users</div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
</div>
@endsection

@push('js')
{{ $dataTable->table() }}
@endpush