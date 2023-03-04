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
                        <input type="email" class="form-control" placeholder="Masukan Email" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Masukan Alamat" name="alamat">
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
