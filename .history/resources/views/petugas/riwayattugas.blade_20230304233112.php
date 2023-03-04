@extends('layouts.app')
@section('title', 'Riwayat Tugas')
@section('icon', 'fa fa-file-text')
@section("content")
    <div class="card">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Jenis</th>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Keterangan Petugas</th>
                </tr>
            </thead>
            <tbody>
                @foreach($riwayat as $i=> $rs)
                    
                @endforeach
                <tr>
                    <td>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection