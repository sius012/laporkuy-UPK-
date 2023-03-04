<div class="modal fade" tabindex="-1" role="dialog" id="modal-penugasan">
    <div class="modal-dialog modal-lg" role="document">
        <form action="{{route('admin.assignpetugas')}}" method="post">
        @csrf
        <input type="hidden" name="id_pengaduan" id="id_pengaduan">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambahkan Petugas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="container">
                    <div class="form-group">
                        <input type="text" id="petugas-field" class="form-control" placeholder="Cari Petugas">
                        <ul class="list-group position-absolute w-100" id="petugas-list">
               
                        </ul>
                    </div>
                </div>
                <table class="table m-3">
                    <thead>
                        <tr>
                            <th>Nama Petugas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="petugas-container">
                       
                    </tbody>
                </table>
                <div class="container">
                    <label for="">Keterangan</label>
                    <textarea name="keterangan_admin" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Ke Petugas</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>