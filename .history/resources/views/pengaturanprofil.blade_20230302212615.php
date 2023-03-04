@extends('layouts.user')

@section('content')
<div class="container card p-3 my-5">
    <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-8">
            <form>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" readonly value="{{Auth::user()->name}}" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div>
                    <div class="col">
                        <a href="#"><i class="fa fa-edit"></i></a>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" readonly class="form-control-plaintext" value="{{Auth::user()->email}}" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="col">
                        <a href="#"><i class="fa fa-edit"></i></a>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" readonly class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control" id="inputNis" placeholder="Belum Dilengkapi">
                    </div>
                    <div class="col">
                        <a href="#"><i class="fa fa-edit"></i></a>
                    </div>
                    
                </div>
                <div class="form-group row">
                    <label for="alamatPassword" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control-plaintext" id="inputNis" placeholder="Alamat" value="{{Auth::user()->alamat}}">
                    </div>
                    <div class="col">
                        <a href="#"><i class="fa fa-edit"></i></a>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="alamatPassword" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="password" readonly class="form-control-plaintext" id="inputNis" placeholder="password" value="12345678">
                    </div>
                </div>
                <div class="form"></div>
            </form>
        </div>
    </div>
</div>
@endsection
