@extends('layouts.auth')
@section('heading-auth', 'Masuk')

@section("content")
<form action="{{route('register')}}" method="">
<div class="form-group">
    <label for="">Nama</label>
    <input type="text" class="form-control-auth" name="name">
</div>
<div class="form-group">
    <label for="">Email</label>
    <input type="email" class="form-control-auth" name="email">
</div>
<div class="form-group">
    <label for="">Alamat</label>
    <input type="text" class="form-control-auth" name="alamat">
</div>
<div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control-auth" name="password">
</div>
<div class="form-group">
    <button class="btn btn-submit mt-4" type="submit">Daftar</button>
</div>
</form>
<p>Anda sudah punya akun? <a href="{{route('login')}}">Masuk</a></p>
@endsection