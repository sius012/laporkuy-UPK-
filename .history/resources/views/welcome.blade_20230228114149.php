@extends('layouts.user')


@section('content')
<div class="jumbotron bg-primary-lk">
    <h1 class="display-4 pt-5">Selamat datang di <b>Laporkuy</b></h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-3">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
  </div>
  <section>
    <div class="container">
        <h3 class="display-6 text-center mb-4">
            Mari Buat Pengaduan
        </h3>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5">
                        fd
                        <img src="" alt="">
                    </div>
                    <div class="col-sm-7">
                        <form action="{{route('pengaduan.buat.user')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Jenis Pengaduan</label>
                            <select  id="" class="form-control" name="id_jenis">
                                @foreach($jenispengaduan as $i => $jp)
                                    <option value="{{$jp->id_jp}}">{{$jp->jenis}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="form-group">
                            <label for="">Lokasi Kejadian</label>
                            <input type="text" class="form-control" name="lokasi" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="datetime-local" class="form-control" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea  id="" cols="30" rows="7" class="form-control" name="keterangan" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Lampiran</label>
                            <input type="file" class="form-control-file" name="lampiran[]" multiple required id="lampiran">
                        </div>
                        <button class="btn btn-primary-lk" type="submit">Buat Pengaduan</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection