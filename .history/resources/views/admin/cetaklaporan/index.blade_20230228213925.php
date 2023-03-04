@extends('layouts.app')
@section('title', 'Cetak Laporan')
@section('content')
<div class="container">

            {{ $dataTable->table() }}

</div>
@endsection

@push('js')
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush