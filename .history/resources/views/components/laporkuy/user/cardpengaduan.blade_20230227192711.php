<div class="card">
    <div class="card-header">
       <b>{{$pn->judul_pengaduan}}</b>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-1 d-flex"><img style="width: 50px" src="https://st3.depositphotos.com/6672868/13701/v/600/depositphotos_137014128-stock-illustration-user-profile-icon.jpg" class="rounded-circle shadow-sm m-auto" alt=""></div>
            <div class="col-sm-11">
                <label for="">Dionisius Setya Hermawan (Anda)</label>
                <p>Dibuat tanggal  {{$pn->tanggal}} <br>
                {{$pn->lokasi}}
                </p>
            </div>
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="keterangan-tab" data-toggle="tab" href="#keterangan" role="tab" aria-controls="keterangan" aria-selected="true">Keterangan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="respon-tab" data-toggle="tab" href="#respon" role="tab" aria-controls="respon" aria-selected="false">Respon</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="petugas-tab" data-toggle="tab" href="#petugas" role="tab" aria-controls="petugas" aria-selected="false">Petugas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="keteranganakhir-tab" data-toggle="tab" href="#keteranganakhir" role="tab" aria-controls="keteranganakhir" aria-selected="false">Keterangan Akhir</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="false">Log</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="keterangan" role="tabpanel" aria-labelledby="home-tab">{{$pn->keterangan}}</div>
            <div class="tab-pane fade show" id="respon" role="tabpanel" aria-labelledby="home-tab">
                @if($pn->penugasan != null)
                    <div class="row">
                        {{$pn->keterangan_admin}}
                    </div>
                @else
                    <div class="d-flex">
                        <h3 class="text-secondary m-auto">Belum Ada Respon</h3>
                    </div>
                @endif
            </div>
            <div class="tab-pane fade show" id="petugas" role="tabpanel" aria-labelledby="home-tab">
                @if($pn->penugasan != null)
                    ul

                @endif
            </div>
            <div class="tab-pane fade show" id="keteranganakhir" role="tabpanel" aria-labelledby="home-tab">Keterangan Akhir</div>
            <div class="tab-pane fade show" id="log" role="tabpanel" aria-labelledby="home-tab">Log</div>
          </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-success"><i class="fa fa-image"></i></button>
    </div>
</div>