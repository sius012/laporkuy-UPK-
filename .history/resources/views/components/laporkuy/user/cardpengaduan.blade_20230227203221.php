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
                        {{$pn->penugasan->keterangan_admin}}
                    </div>
                    <div class="container">
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
                                    @if($pn->penugasan->tanggapan != null)
                                    @foreach($pn->penugasan->tanggapan as $l => $tgp)
                                    <!-- Message. Default to the left -->
                                    <div class="direct-chat-msg">
                                       
                                            
                                        
                                        <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name @if(Auth::user()->id != $tgp->sender->id) float-left @else float-right @endif">{{$tgp->sender->name}}</span>
                                            <span class="direct-chat-timestamp @if(Auth::user()->id != $tgp->sender->id) float-right @else float-right @endif">23 Jan 5:37
                                                pm</span>
                                        </div>
                                        <!-- /.direct-chat-infos -->
                                        <img class="direct-chat-img" src="dist/img/user1-128x128.jpg"
                                            alt="message user image">
                                        <!-- /.direct-chat-img -->
                                        <div class="direct-chat-text">
                                            Working with AdminLTE on a great new app! Wanna join?
                                        </div>
                                        <!-- /.direct-chat-text -->
                                    </div>
                                    <!-- /.direct-chat-msg -->
                                    @endforeach
                                    @endif
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
                    </div>
                @else
                    <div class="d-flex">
                        <h3 class="text-secondary m-auto">Belum Ada Respon</h3>
                    </div>
                @endif
            </div>
            <div class="tab-pane fade show" id="petugas" role="tabpanel" aria-labelledby="home-tab">
                @if($pn->penugasan != null)
                    <ul class='list-group'>
                        @foreach($pn->penugasan->petugas_lapangan as $j => $pl)
                          <li class="list-group-item">{{$pl->petugas->name}} <span class="badge bg-primary">{{$pl->jabatan}}</span></li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <div class="tab-pane fade show" id="keteranganakhir" role="tabpanel" aria-labelledby="home-tab">Keterangan Akhir</div>
            <div class="tab-pane fade show" id="log" role="tabpanel" aria-labelledby="home-tab">
                    <ul class='list-group'>
                        @foreach($pn->log as $j => $pl)
                          <li class="list-item-group">{{$pl->isi_log}}</li>
                        @endforeach
                    </ul>
            </div>
          </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-success"><i class="fa fa-image"></i></button>
    </div>
</div>