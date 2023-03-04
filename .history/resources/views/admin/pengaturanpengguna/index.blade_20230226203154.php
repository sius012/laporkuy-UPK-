@extends('layouts.app')

@section("content")
    <table class="table table-striped table-bordered">
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
                <td>{{$usr->alamat}}</td>
                <td>{{$usr->email}}</td>
                <td>
                    <button class='btn btn-warning'><i class="fa fa-edit"></i></button>
                    <button class='btn btn-danger'><i class="fa fa-trash"></i></button>
                </td>

            </tr>
            @endforeach
            
        </tbody>
    </table>

@endsection