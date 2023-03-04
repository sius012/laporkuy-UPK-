<div class="modal fade" id="modal-laporan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                            <div class="dropdown-menu dropdown-status" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item item-status" href="#">Menunggu</a>
                                                <a class="dropdown-item item-status" href="#">Ke Petugas</a>
                                                <a class="dropdown-item item-status" href="#">Diproses</a>
                                                <a class="dropdown-item item-status" href="#">Ditunda</a>
                                                <a class="dropdown-item item-status" href="#">Selesai</a>
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
                                         
                                        <!--/.direct-chat -->
                                    </div>
                                    <div class="tab-pane fade" id="petugas" role="tabpanel"
                                        aria-labelledby="petugas-tab">
                                        <ul class="list-group list-petugas">
                                            <li class="list-group-item">Dionisius</li>
                                        </ul>    
                                    </div>
                                    <div class="tab-pane fade" id="log" role="tabpanel" aria-labelledby="log-tab">
                                        <ul class="list-group list-log">
                                            <li class="list-group-item">Dionisius</li>
                                        </ul>    
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