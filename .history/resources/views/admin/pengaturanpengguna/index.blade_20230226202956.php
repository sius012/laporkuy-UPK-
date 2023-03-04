@extends('layouts.app')

@section("content")
    <table class="table table-striped">
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
            @foreach($user as $i => $usr)
            <tr>
                <td>{{$i+1}}</td>
                <td> </td>
                <td>{{$usr->name}}</td>
                <td>{{$i+1}}</td>
                <td>{{$i+1}}</td>

            </tr>
            @endforeach
            
        </tbody>
    </table>

@endsection