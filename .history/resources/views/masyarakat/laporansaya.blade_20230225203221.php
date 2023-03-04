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
                                  <i class="fas fa-list"></i> {{$pn->judul_pengaduan}} <span class="badge">{{$pn->menunggu}}</span>
                                </button>
                              </h5>
                            </div>
                        
                            <div id="collapse{{$i}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home{{$i}}" role="tab" aria-controls="home" aria-selected="true">Keterangan</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile{{$i}}" role="tab" aria-controls="profile" aria-selected="false">Respon Petugas</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact{{$i}}" role="tab" aria-controls="contact" aria-selected="false">Petugas</a>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home{{$i}}" role="tabpanel" aria-labelledby="home-tab">{{$pn->keterangan}}</div>
                                    <div class="tab-pane fade" id="profile{{$i}}" role="tabpanel" aria-labelledby="profile-tab">
                                     @if($pn->penugasan != null)
                                      <div class="card direct-chat direct-chat-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Respon Petugas</h3>
                                            <div class="card-tools">
                                                <span title="3 New Messages" class="badge badge-primary">3</span>
                                                <button type="button" class="btn btn-tool"
                                                    data-card-widget="collapse">
                                                    <i class="fas fa-minus"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" title="Contacts"
                                                    data-widget="chat-pane-toggle">
                                                    <i class="fas fa-comments"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool"
                                                    data-card-widget="remove">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <!-- Conversations are loaded here -->
                                            <div class="direct-chat-messages">
                                                <!-- Message. Default to the left -->

                                                <!-- /.direct-chat-msg -->
                                                @foreach($pn->penugasan->tanggapan as $j => $p)
                                                  <div class="direct-chat-msg @if($p->sender->id == auth()->user()->id)  right @endif" >
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name @if($p->sender->id == auth()->user()->id) float-right @else float-left @endif">{{$p->sender->name}}</span>
                                                        <span class="direct-chat-timestamp @if($p->sender->id == auth()->user()->id) float-left @else float-right @endif">{{$p->tanggal}}</span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                                        alt="message user image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        {{$p->tanggapan}}
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                </div>
                                                @endforeach
                                                <!-- Message. Default to the left -->
                                               
                                                <!-- /.direct-chat-msg -->

                                                <!-- Message to the right -->
                                                <div class="direct-chat-msg right">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-right">Sarah
                                                            Bullock</span>
                                                        <span class="direct-chat-timestamp float-left">23 Jan 6:10
                                                            pm</span>
                                                    </div>
                                                    <!-- /.direct-chat-infos -->
                                                    <img class="direct-chat-img" src="dist/img/user3-128x128.jpg"
                                                        alt="message user image">
                                                    <!-- /.direct-chat-img -->
                                                    <div class="direct-chat-text">
                                                        I would love to.
                                                    </div>
                                                    <!-- /.direct-chat-text -->
                                                </div>
                                                <!-- /.direct-chat-msg -->

                                            </div>
                                            <!--/.direct-chat-messages-->

                                            <!-- Contacts are loaded here -->
                                            <div class="direct-chat-contacts">
                                                <ul class="contacts-list">
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="dist/img/user1-128x128.jpg" alt="User Avatar">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Count Dracula
                                                                    <small
                                                                        class="contacts-list-date float-right">2/28/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">How have you been? I
                                                                    was...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="dist/img/user7-128x128.jpg" alt="User Avatar">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Sarah Doe
                                                                    <small
                                                                        class="contacts-list-date float-right">2/23/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">I will be waiting
                                                                    for...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="dist/img/user3-128x128.jpg" alt="User Avatar">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Nadia Jolie
                                                                    <small
                                                                        class="contacts-list-date float-right">2/20/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">I'll call you back
                                                                    at...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="dist/img/user5-128x128.jpg" alt="User Avatar">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Nora S. Vans
                                                                    <small
                                                                        class="contacts-list-date float-right">2/10/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">Where is your
                                                                    new...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="dist/img/user6-128x128.jpg" alt="User Avatar">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    John K.
                                                                    <small
                                                                        class="contacts-list-date float-right">1/27/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">Can I take a look
                                                                    at...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="dist/img/user8-128x128.jpg" alt="User Avatar">

                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Kenneth M.
                                                                    <small
                                                                        class="contacts-list-date float-right">1/4/2015</small>
                                                                </span>
                                                                <span class="contacts-list-msg">Never mind I
                                                                    found...</span>
                                                            </div>
                                                            <!-- /.contacts-list-info -->
                                                        </a>
                                                    </li>
                                                    <!-- End Contact Item -->
                                                </ul>
                                                <!-- /.contacts-list -->
                                            </div>
                                            <!-- /.direct-chat-pane -->
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <form action="#" method="post">
                                                <div class="input-group">
                                                    <input type="hidden" name="param">
                                                    <input type="text" name="message" id="isi-pesan"
                                                        placeholder="Type Message ..." class="form-control">
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn btn-primary"
                                                            id="message-sender">Send</button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /.card-footer-->
                                      
                                    </div>
                                    @endif
                                 
                                    </div>
                                    <div class="tab-pane fade" id="contact{{$i}}" role="tabpanel" aria-labelledby="contact-tab">...</div>
                                  </div>
                              </div>
                              <div class="card-footer">
                                <button class="btn btn-primary-lk"><i></i></button>
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