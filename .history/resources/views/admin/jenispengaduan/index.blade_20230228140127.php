@extends('layouts.app')
@section('title', 'Jenis Pengaduan')
@section('content')
<button class="btn btn-primary-lk">Tambah Jenis </button>
<table class="table table-striped table-light table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis Pengaduan</th>
            <th>Keterangan</th>
            <th>Laporan Dibuat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jenis_pengaduan as $i => $jp)
        <tr>
            <td>{{$i+1}}</td>
            <td>{{$jp->ke}}</td>
            <td>{{$i+1}}</td>
            <td>{{$i+1}}</td>
            <td>{{$i+1}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection