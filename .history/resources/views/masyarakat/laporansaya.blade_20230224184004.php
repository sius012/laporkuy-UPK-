@extends('layouts.user')


@section('content')
    <div class="container">
        <h3 class='m-3'>Pengaduan Saya</h3>
        <div class="row">
            <div class="card container m-3">
                <div class="card-body">
                    <div id="accordion">
                        @foreach($pengaduan as $i => $pn)
                        <div class="card">
                            <div class="card-header" id="headingOne">
                              <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$i}}" aria-expanded="true" aria-controls="collapseOne">
                                  <i class="fas fa-list"></i> Ada Kebakaran
                                </button>
                              </h5>
                            </div>
                        
                            <div id="collapse{{$i}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Keterangan</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Respon Petugas</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Petugas</a>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">{{$pn->keterangan}}</div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                                  </div>
                              </div>
                              <div class="card-footer">
                                <button></button>
                              </div>
                            </div>
                          </div>    
                        @endforeach
                        
                        
                      </div>
                </div>
            </div>
        </div>
    </div>

@endsection