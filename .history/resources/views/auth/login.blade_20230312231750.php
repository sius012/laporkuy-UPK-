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
    <label for="">Passwordd</label>
    <input type="password" class="form-control-auth" name="password" required>

    <span class="invalid-feedback text-danger">
        <strong>tes</strong>
    </span>

</div>
<div class="form-group">
    <button type="submit" class="btn btn-submit mt-4">Masuk</button>
</div>
</form>
<p>Anda sudah punya akun? <a href="{{route('register')}}">Daftar!</a></p>
@endsection