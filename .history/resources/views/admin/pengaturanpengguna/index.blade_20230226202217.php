@extends('layouts.app')

@section("content")
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($variable as $key => $value)
                
            @endforeach
          
        </tbody>
    </table>

@endsection