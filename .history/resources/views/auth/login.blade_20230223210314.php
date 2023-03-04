@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 20vh">
        <div class="col-md-4 m-auto">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mb-5">Laporkuy</h3>
                    <p class="text-center"><b> Masuk</b></p>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Masukan Nama Anda" name="name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Masukan Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Masukan Alamat">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Masukan Sandi">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Masukan Sandi">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
