@extends('layouts.user')

@section('content')
<div class="container card p-3 my-5">
    <form action="{{route('user.perbaruiakun')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-4 d-flex">
            <img class="rounded-circle m-auto shadow" src="{{Auth::user()->pp()}}" alt="">
            <button type="button" class="btn btn-primary-lk position-absolute btn-image m-auto" style="top: 70%; left: 20%"><i class="fa fa-image"></i></button>
            <input type="file" class="img-input" name="img-input" accept="image/*">
        </div>
        <div class="col-sm-8">
            <form>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text"  name="name" readonly value="{{Auth::user()->name}}" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                    </div>
                    <div class="col">
                        <a href="#" class="btn-edit"><i class="fa fa-edit"></i></a>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" readonly class="form-control-plaintext" value="{{Auth::user()->email}}" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="col">
                        <a href="#" class="btn-edit"><i class="fa fa-edit"></i></a>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" readonly class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-9">
                        <input type="text" name="nik" readonly class="form-control" id="inputNis" placeholder="Belum Dilengkapi" value="{{Auth::user()->nik}}">
                    </div>
                    <div class="col">
                        <a href="#" class="btn-edit"><i class="fa fa-edit"></i></a>
                    </div>
                    
                </div>
                <div class="form-group row">
                    <label for="alamatPassword" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" name="alamat" readonly class="form-control-plaintext" id="inputNis" placeholder="Alamat" value="{{Auth::user()->alamat}}">
                    </div>
                    <div class="col">
                        <a href="#" class="btn-edit"><i class="fa fa-edit"></i></a>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="alamatPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" readonly class="form-control-plaintext" id="inputNis" placeholder="password" value="12345678">
                    </div>
                    <div class="col-sm-1">
                        <a href="#" class="btn-edit"><i class="fa fa-edit"></i></a>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary-lk">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</form>
</div>

@endsection


@push('js')
<script>
    $(document).ready(function(){
       $(".btn-edit").click(function(){
    
            let elementinput = $(this).closest(".form-group").find("input");
            
            
            if(elementinput.attr("readonly") == undefined){
                elementinput.attr("readonly","readonly");
                elementinput.attr('class',"form-control-plaintext");
            }else{
                
                elementinput.attr('class',"form-control");
                elementinput.removeAttr("readonly");
                
            }
       });

       $(".img-input").hide();
      $(".btn-image").click(function(){
         $(".img-input").trigger('click');
      });
    });
</script>

@endpush
