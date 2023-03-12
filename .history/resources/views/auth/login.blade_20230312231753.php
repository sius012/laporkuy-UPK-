@extends('layouts.auth')
@section('heading-auth', 'Masuk')
@section('title', 'Masuk')
@section("content")
<form action="{{route('login')}}" method="post">
@csrf
<div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control-auth" name="email" required>
    @if ($errors->has('email'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('email') }}</strong>
    </span>
@endif
</div>
<div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control-auth" name="password" required>
    @if ($errors->has('password'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('password') }}</strong>
    </span>
@endif
</div>
<div class="form-group">
    <button type="submit" class="btn btn-submit mt-4">Masuk</button>
</div>
</form>
<p>Anda sudah punya akun? <a href="{{route('register')}}">Daftar!</a></p>
@endsection