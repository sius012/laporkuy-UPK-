@extends('layouts.auth')
@section('heading-auth', 'Daftar')

@section("content")
<form action="{{route('register')}}" method="POST">
@csrf
<div class="form-group">
    <label for="">Nama</label>
    <input type="text" class="form-control-auth" name="name" required>
</div>
<div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control-auth" name="email" required>
    @if ($errors->has('email'))
        <span class="text-danger">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
</div>
<div class="form-group">
    <label for="">Alamat</label>
    <input type="text" class="form-control-auth" name="alamat" required>
</div>
<div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control-auth" name="password" required>
    @if ($errors->has('password'))
        <span class="text-danger">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
</div>
<div class="form-group">
    <button class="btn btn-submit mt-4" type="submit">Daftar!</button>
</div>
</form>
<p>Anda sudah punya akun? <a href="{{route('login')}}">Masuk</a></p>
@endsection