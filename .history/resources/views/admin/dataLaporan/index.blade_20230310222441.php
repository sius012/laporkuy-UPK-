@extends("layouts.app")
@section("title", "Data Pengaduan")
@section("icon", "fa fa-file")
@section("content")
<div class="container-fluid">
    <div class="card p-3 m-3">
        @include("components.laporkuy.user.filter")
        <table id="example" class="table table-bordered">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Jenis Laporan</th>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pengaduan as $p)
                <tr>
                    <td>{{date("Y-m-d", strtotime($p->tanggal))}}</td>
                    <td>{{$p->jenis->jenis}}</td>
                    <td>{{Laporkuy::trunc($p->judul_pengaduan, 5)}}</td>
                    <td>{{$p->keterangan}}</td>
                    <td>
                    <div class="dropdown show ">
                                            <a class="btn  dropdown-toggle status-drop {{Laporkuy::renderSpan($p->status)}}" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                    {{$p->status}}
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item item-status" href="#" value="Menunggu:{{$p->id_pengaduan}}">Menunggu</a>
                                                <a class="dropdown-item item-status" href="#" value="Ke Petugas:{{$p->id_pengaduan}}">Ke Petugas</a>
                                                <a class="dropdown-item item-status" href="#" value="Diproses:{{$p->id_pengaduan}}">Diproses</a>
                                                <a class="dropdown-item item-status" href="#" value="Ditunda:{{$p->id_pengaduan}}">Ditunda</a>
                                                <a class="dropdown-item item-status" href="#" value="Selesai:{{$p->id_pengaduan}}">Selesai</a>
                                                <a class="dropdown-item item-status" href="#" value="Dibatalkan:{{$p->id_pengaduan}}">Dibatalkan</a>
                                            </div>
                                        </div>
                    </td>
                    <td>
                        <button value="{{$p->id_pengaduan}}" class="btn btn-primary btn-info-laporan"  data-target="#modal-laporan" uri="{{url('getsinglepengaduan')}}"><i class="fa fa-file"></i></button>
                        <button value="{{$p->id_pengaduan}}"  class="btn btn-success btn-assigment"><i class="fa fa-users"></i></button>
                        @if($p->penugasan==null)<button value="{{$p->id_pengaduan}}"  class="btn btn-danger btn-delete"><i class="fa fa-trash"></i></button>@endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>


<!-- Modal -->

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
    
</script>
<script>

$(document).ready(function() {
    $("#example").DataTable({
        "searching": false,
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
    }).buttons().container().appendTo('#example_wrapper .col-md-6:eq(0)');


    $(".btn-assigment").click(function(){
      //  alert('tes');
        $("#id_pengaduan").val($(this).val());
        $("#modal-penugasan").modal("show");
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr('content')
            },
            data: {
                id_pengaduan: $(this).val()
            },
            url: "{{route('pengaduan.getpenugasan')}}",
            dataType: "json",
            type: "get",
            success: function(data){
                console.log(data);
                tampilkanpetugas(data);
            },error: function(err){
                alert(err.responseText);
            }
        })
    });

    $(document).mouseup(function(e) 
{
    var container = $("#petugas-list");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.hide();
    }
    });
   


        $("#petugas-field").keyup(function(){
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN" : $("meta[name=csrf-token]").attr("content")
                },
                data: {
                    name: $(this).val()
                },
                url: "{{route('getpetugaslist')}}",
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
            sendMessage("{{url('send-tanggapan')}}");
        });


        $(".btn-delete").click(function(){
            deletePengaduan($(this).val(), {{}})
        })

        //update status;
        $(document).delegate(".dropdown-item", "click", function(){
                   changeStatus($(this).attr("value"), "{{url('/ubahstatuslaporan')}}");
        });
});



</script>
@endpush