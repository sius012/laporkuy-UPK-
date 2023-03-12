@extends('layouts.auth')
@section('heading-auth', 'Masuk')
@section('title', 'Masuk')
@section("content")
<form action="{{route('login')}}" method="post">
@csrf
<div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control-auth" name="email" required>
    <span></span>
</div>
<div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control-auth" name="password" required>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-submit mt-4">Masuk</button>
</div>
</form>
<p>Anda sudah punya akun? <a href="{{route('register')}}">Daftar!</a></p>
@endsection