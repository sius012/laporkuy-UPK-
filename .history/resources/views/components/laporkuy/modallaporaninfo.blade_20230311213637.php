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
                        <div class="col-8">
                            <div class="row">
                                <div class="col">
                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner img-prev-cont my-auto">
        
                                        </div>
                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
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
                                            <th>Lokasi</th>
                                            <td>
                                                <p class="modal-lokasi-laporan"></p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                <div class="dropdown show ">
                                                    <a class="btn  dropdown-toggle status-drop" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        
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
