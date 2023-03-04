<div class="modal fade" id="modal-laporan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-focus="false">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="containers">
                    <div class="row">
                        <div class="col-4">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner img-prev-cont my-auto">

                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-8">
                            <table class="table">
                                <tr>
                                    <th>Jenis Laporan</th>
                                    <td>
                                        <p class="modal-jenis-laporan"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Judul Laporan</th>
                                    <td>
                                        <p class="modal-judul-laporan"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Tanggal</th>
                                    <td>
                                        <p class="modal-tanggal-laporan"></p>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        <div class="dropdown show ">
                                            <a class="btn  dropdown-toggle status-drop" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">

                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">Menunggu</a>
                                                <a class="dropdown-item" href="#">Ke Petugas</a>
                                                <a class="dropdown-item" href="#">Diproses</a>
                                                <a class="dropdown-item" href="#">Ditunda</a>
                                                <a class="dropdown-item" href="#">Selesai</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div class="container ">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="keterangan-tab" data-toggle="tab"
                                            href="#keterangan" role="tab" aria-controls="keterangan"
                                            aria-selected="true">keterangan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="respon-petugas-tab" data-toggle="tab"
                                            href="#respon-petugas" role="tab" aria-controls="respon-petugas"
                                            aria-selected="false">Respon
                                            Petugas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#petugas"
                                            role="tab" aria-controls="petugas" aria-selected="false">Petugas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="log-tab" data-toggle="tab" href="#log" role="tab"
                                            aria-controls="log" aria-selected="false">Log</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#keterangan-akhir"
                                            role="tab" aria-controls="keterangan-akhir"
                                            aria-selected="false">Keterangan</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="keterangan" role="tabpanel"
                                        aria-labelledby="keterangan-tab">
                                        <div class="card m-2">
                                            <div class="card-body">
                                                <p class="keterangan-field">Lorem ipsum dolor sit amet consectetur
                                                    adipisicing elit. Ad voluptate commodi maiores sunt sit voluptatem
                                                    fugit voluptates perferendis dolorem deleniti!</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="respon-petugas" role="tabpanel"
                                        aria-labelledby="responpetugas-tab">
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

                                                    <!-- Message. Default to the left -->
                                                    <div class="direct-chat-msg">
                                                        <div class="direct-chat-infos clearfix">
                                                            <span class="direct-chat-name float-left">Alexander
                                                                Pierce</span>
                                                            <span class="direct-chat-timestamp float-right">23 Jan 5:37
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
                                        <!--/.direct-chat -->
                                    </div>
                                    <div class="tab-pane fade" id="petugas" role="tabpanel"
                                        aria-labelledby="petugas-tab">
                                        <ul class="list-group list-petugas">
                                            <li class="list-group-item">Dionisius</li>
                                        </ul>    
                                    </div>
                                    <div class="tab-pane fade" id="log" role="tabpanel" aria-labelledby="log-tab">
                                        
                                    </div>
                                    <div class="tab-pane fade" id="keterangan-akhir" role="tabpanel"
                                        aria-labelledby="keteranganakhir-tab">keterangan akhir</div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>