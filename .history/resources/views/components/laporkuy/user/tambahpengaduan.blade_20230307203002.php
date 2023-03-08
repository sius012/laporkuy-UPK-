'<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Laporan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jenis Aduan</label>
                        <select id="" class="form-select" name="id_jenis" required>
                            @foreach($jenisaduan as $ja)
                                <option value="{{$ja->id_jp}}">{{$ja->jenis}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="judulLabel" class="form-label">Judul Pengaduan</label>
                        <input type="text" class="form-control" id="judulLabel" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="keteranganLabel" class="form-label">Keterangan</label>
                        <textarea  id="" cols="30" rows="5" class="form-control" name="keterangan" id="keteranganLabel" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="lokasiLabel" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="lokasiLabel" name="lokasi" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggalLabel" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggalLabel" name="tanggal" required>
                    </div>
                    <div class="mb-3">
                        <label for="lampiranLabel" class="form-label">Lampiran</label>
                        <input type="file" class="form-control" id="lampiranLabel" name="lampiran[]" multiple required>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Adukan!</button>
            </div>
            </form>
        </div>
    </div>
</div>