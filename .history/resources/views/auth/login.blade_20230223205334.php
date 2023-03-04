@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 m-auto">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Masukan Nama Anda">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
