@extends('layouts.user')


@section('content')
   
    <div class="container">
        
        <h3 class='m-3'>Pengaduan Saya</h3>
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-filter"></i> Filter
                </div>
                <div class="card-body">
                    <form action="" method="get">
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">Judul</label>
                            <input type="text" class="form-control" name="judul">
                        </div>
                        <div class="col-sm">
                            <label for="">Pilih Jenis</label>
                            <select name="jp" id="" class='form-control'>
                                <option value=""></option>
                                @foreach($jenis_pengaduan as $i => $jp)
                                    <option value="{{$jp->id_jp}}">{{$jp->jenis}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <label for="">Dari</label>
                            <input type="date" class="form-control" name="dari">
                        </div>
                        <div class="col-sm">
                            <label for="">Sampai</label>
                            <input type="date" class="form-control" name="sampai">
                        </div>
                        <div class="col-sm">
                            <br>
                            <button class="btn btn-primary-lk mt-2">Cari</button>
                        </div>
                    </div>
                     </form>
                </div>
            </div>
        </div>
        <div class="card container p-3">
            @foreach($pengaduan as $i => $pn)
                @include('components.laporkuy.user.cardpengaduan')
            @endforeach
        </div>
    </div>

@endsection