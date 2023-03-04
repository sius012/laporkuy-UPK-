@extends('layouts.app')
@section('title', 'Cetak Laporan')
@section('content')
<div class="container">

            {{ $dataTable->table() }}

</div>
@endsection

@push('js')

<script src="/vendor/datatables/buttons.server-side.js"></script>
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush