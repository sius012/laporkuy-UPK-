@extends('layouts.auth')
@section('heading-auth', 'Masuk')

@section("content")
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
    <label for="">Nama</label>
    <input type="text" class="form-control-auth">
</div>
@endsection