@extends("layouts.app")
@section("title", "Data Laporan")
@section("content")
<div class="container-fluid">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Laporan
    </button>
    <div class="card p-3 m-3">
        <table id="example" class="table table-bordered">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Jenis Laporan</th>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Pelapor</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengaduan as $p)
                <tr>
                    <td>{{date("Y-m-d", strtotime($p->tanggal))}}</td>
                    <td>{{$p->jenis->jenis}}</td>
                    <td>{{$p->judul_pengaduan}}</td>
                    <td>{{$p->keterangan}}</td>
                    <td>{{$p->pelapor->name}}</td>
                    <td>{{$p->status}}</td>
                    <td><button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-laporan"><i class="fa fa-file"></i></button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <form action="{{route('laporan.buat')}}" method="post" enctype="multipart/form-data">
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

@include("components.laporkuy.modallaporaninfo")



@endsection

@push("js")
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
$(function() {
    $("#example").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');
});
</script>
@endpush