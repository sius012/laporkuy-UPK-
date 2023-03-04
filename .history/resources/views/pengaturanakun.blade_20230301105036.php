@if(Auth::user()->roles[0]->name = "Masyarakat")
    @extends('layouts.user')

@else
    @extends('layouts.app')
@endif


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-8">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">NIK</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
    </div>
@endsection