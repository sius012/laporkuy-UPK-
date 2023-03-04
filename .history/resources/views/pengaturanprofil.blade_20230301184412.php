
@extends('layouts.user')



@section('content')
    <div class="container card p-3">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-8">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">NIK</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control">
                </div>
            </div>
        </div>
    </div>
@endsection