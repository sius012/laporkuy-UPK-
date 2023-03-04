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
                    <td>
                    <div class="dropdown show ">
                                            <a class="btn  dropdown-toggle status-drop {{Laporkuy::renderSpan($p->status)}}" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                    {{$p->status}}
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#" value="Menunggu:{{$p->id_pengaduan}}">Menunggu</a>
                                                <a class="dropdown-item" href="#" value="Ke Petugas:{{$p->id_pengaduan}}">Ke Petugas</a>
                                                <a class="dropdown-item" href="#" value="Diproses:{{$p->id_pengaduan}}">Diproses</a>
                                                <a class="dropdown-item" href="#" value="Ditunda:{{$p->id_pengaduan}}">Ditunda</a>
                                                <a class="dropdown-item" href="#" value="Selesai:{{$p->id_pengaduan}}">Selesai</a>
                                            </div>
                                        </div>
                    </td>
                    <td>
                        <button value="{{$p->id_pengaduan}}" class="btn btn-primary btn-info-laporan" data-bs-toggle="modal" data-bs-target="#modal-laporan" uri="{{url('getsinglepengaduan')}}"><i class="fa fa-file"></i></button>
                        <button value="{{$p->id_pengaduan}}" data-bs-toggle="modal" data-bs-target="#modal-penugasan" class="btn btn-success btn-assigment"><i class="fa fa-users"></i></button>
                    </td>
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
@include("components.laporkuy.modalpenugasan")
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
<script src="{{asset('js/laporkuy/pengaduan.js')}}"></script>
<script>
$(function() {
    $("#example").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');


    $(".btn-assigment").click(function(){
        $("#id_pengaduan").val($(this).val());
    });


   


        $("#petugas-field").keyup(function(){
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN" : $("meta[name=csrf-token]").attr("content")
                },
                data: {
                    name: $(this).val()
                },
                url: "{{url('/getpetugaslist')}}",
                dataType: "json",
                type: "post",
                success: function(data){
                    $("#petugas-list").show();
                    
                    console.log(data);
                    
                    var li = data.map(function(e){
                        return `<li class="list-group-item">${e["name"]} <button type="button" class="btn btn-sm btn-primary add-petugas" value="${e["id"]}" name_account="${e["name"]}">+</button></li>`;
                    })
                    $("#petugas-list").html(li);
                },error: function(err){
                    alert(err.responseText);
                }
            })
        });

        $(document).delegate(".add-petugas", "click", function(){
            let id_user = $(this).val();
            let sudahada = false;
            $(".petugas-id-cont").each(function(){
                if(id_user == $(this).val()){
                    sudahada = true;
                }
            });
            if(!sudahada){
                $(".petugas-container").append(
                ` <tr>
                            <td><input type='hidden' name="petugas[]" class="petugas-id-cont" value="${$(this).val()}">${$(this).attr("name_account")}</td>
                            <td>
                                <select class="form-control" class="jabatan-select" name="jabatan[]">
                                    <option value='Anggota'>Anggota</option>
                                    <option value='Ketua'>Ketua</option>
                                </select>
                            </td>
                            <td><button class="btn btn-danger btn-hapus-petugas"><i class="fa fa-trash"></i></button></td>
                        </tr>`
            )
            }
           
        });

        $(document).delegate(".btn-hapus-petugas", "click", function(){
            $(this).closest("tr").remove();
        });


        $("#message-sender").click(function(){
            if($("#isi-pesan").val().length != ""){
                $.ajax({
                    headers: {
                        "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")
                    },
                    url: "{{url('send-tanggapan')}}",
                    dataType: "json",
                    data: {
                        "id_penugasan": $("input[name=param]").val(),
                        "pesan": $("#isi-pesan").val()
                    },
                    type: "post",
                    success: function(data){
                        window.location = "";
                    },error: function(err){
                        alert(err.responseText);
                    }
                })
            }
        });


        //update status;
        $(document).delegate(".dropdown-item", "click", function(){
            changeStatus($(this).attr("value"),$);
        });
});


function changeStatus(val, url){
    let arr = val.split(":");
    let status = arr[0];
    let id_pengaduan = arr[1];
    if(status != 'Selesai'){
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")
            },
            url: url,
            dataType: "json",
            data: {
                val: val,
            },
            type: "post",
            success: function(){
            },error: function(err){
                alert(err.responseText);
             } 
        });
    }else{
       $("#modal-selesai").modal("show");
    }
   
}
</script>
@endpush