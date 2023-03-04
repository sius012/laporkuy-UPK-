@extends('layouts.auth')
@section('heading-auth', 'Masuk')

@section("content")
<form action="{{route('login')}}"></form>
<div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control-auth" name="email">
</div>
<div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control-auth" name="password">
</div>
<div class="form-group">
    <button class="btn btn-submit mt-4">Masuk</button>
</div>
<p>Anda sudah punya akun? <a href="{{route('register')}}">Daftar!</a></p>
@endsection