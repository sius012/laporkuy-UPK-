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
                                <option value="">Pilih Jenis Pengaduan</option>
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

    <div class="modal fade" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

@endsection