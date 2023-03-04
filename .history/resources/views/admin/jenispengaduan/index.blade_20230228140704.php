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
            <td>{{$jp->jenis}}</td>
            <td>{{$jp->keterangan}}</td>
            <td>{{$jp->pengaduan()->count()}}</td>
            <td>
                @if($jp->status == "Non-Aktif")
                    <button class="btn btn-success"><i class="fas fa-check"></i></button>
                @else
                   <button class="btn btn-warning"><i class="fas fa-times mr-2"></i>Non-Aktifkan</button>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection