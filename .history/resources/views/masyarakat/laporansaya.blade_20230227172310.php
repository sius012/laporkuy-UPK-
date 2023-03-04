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
                                          <a class="nav-link active" id="keterangan-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Keterangan</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" id="respon-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Respon</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Petugas</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Keterangan Akhir</a>
                                          </li>
                                      </ul>
                                      <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                                      </div>
                                </div>
                            </div>
                            
                        
                      </div>
                </div>
            </div>
        </div>
    </div>

@endsection