@extends('layouts.app')
@section('title', 'Cetak Laporan')
@section('content')
<div class="container">

            {{ $dataTable->table() }}
        </div>
    </div>
</div>
@endsection

@push('js')

{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush