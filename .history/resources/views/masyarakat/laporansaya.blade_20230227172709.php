@extends('layouts.user')


@section('content')
    <div class="container">
        <h3 class='m-3'>Pengaduan Saya</h3>
        <div class="row">
            <div class="card container m-3">
                <div class="card-body">
                    <div id="accordion">
                      
                            <div class="card">
                                <div class="card-header">
                                    Pengaduan
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-2"><img style="width: 50px" src="https://st3.depositphotos.com/6672868/13701/v/600/depositphotos_137014128-stock-illustration-user-profile-icon.jpg" class="rounded-circle shadow-sm" alt=""></div>
                                        <div class="col-sm-10">
                                            <label for="">Dionisius Setya Hermawan (Anda)</label>
                                            <p>Dibuat tanggal  30 januari 2025</p>
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
                                        <div class="tab-pane fade show active" id="keterangan" role="tabpanel" aria-labelledby="home-tab">Keterangan</div>
                                        <div class="tab-pane fade show active" id="respon" role="tabpanel" aria-labelledby="home-tab">Respon</div>
                                        <div class="tab-pane fade show active" id="petugas" role="tabpanel" aria-labelledby="home-tab">Petugas</div>
                                        <div class="tab-pane fade show active" id="keteranganakhir" role="tabpanel" aria-labelledby="home-tab">...</div>
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                                      </div>
                                </div>
                            </div>
                            
                        
                      </div>
                </div>
            </div>
        </div>
    </div>

@endsection