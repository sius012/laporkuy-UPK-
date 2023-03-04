@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 20vh">
        <div class="col-md-4 m-auto">
            <div class="card">
                <div class="card-body">
                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Masukan Nama Anda">
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
