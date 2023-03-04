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
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="">CariJudul</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm">
                            <label for="">Pilih Jenis</label>
                            <select name="" id="" class='form-control'>
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
                </div>
            </div>
        </div>
        <div class="card container p-3">
            @foreach($pengaduan as $i => $pn)
                @include('components.laporkuy.user.')
            @endforeach
        </div>
    </div>

@endsection