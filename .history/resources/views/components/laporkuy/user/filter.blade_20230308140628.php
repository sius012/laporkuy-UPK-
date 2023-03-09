<div class="card">
    <div class="card-header">
        <i class="fa fa-filter"></i> Filter
    </div>
    <div class="card-body">
        <form action="" method="get">
            <div class="row">
                <div class="col-sm-3">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="col-sm">
                    <label for="">Pilih Jenis</label>
                    <select name="jp" id="" class='form-control'>
                        <option value="">Pilih Jenis Pengaduan</option>
                        @foreach($jenis_pengaduan as $i => $jp)
                        <option value="{{$jp->id_jp}}">{{$jp->jenis}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-sm">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="Menunggu">Menunggu</option>
                        <option value="Ditolak">Ditolak</option>
                        <option value="Diproses">Diproses</option>
                        <option value="Ke Petugas">Ke Petugas</option>
                        <option value="Selesai">Selesai</option>
                    </select>
                </div>
                <div class="col">
                    <label for="">Dari</label>
                    <input type="date" class="form-control" name="dari">
                </div>
                <div class="col-sm">
                    <label for="">Sampai</label>
                    <input type="date" class="form-control" name="sampai">
                </div>
                <div class="col-sm">
                    <br>
                    <button class="btn btn-primary-lk mt-2">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>