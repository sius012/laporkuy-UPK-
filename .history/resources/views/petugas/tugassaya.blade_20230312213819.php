@extends("layouts.app")
@section('title', 'Tugas Saya')
@section("content")
<div class="container-fluid">
    <div class="row" style="height: 100vh">
        @foreach($pengaduan as $i => $ps)
        <div class="col">
            <div class="card card-main-task p-3" style="height: 90vh; overflow-y: scroll">
                <div class="row">
                    <div class="col"> <label>{{ucwords ($i)}}</label></div>
                    <div class="col"><label class="badge {{$color[$i]}}">{{count($ps)}}</label></div>
                    <div class="col"><a href="#" class="btn-orderby" state="Terbaru">Terbaru</a></div>
                </div>

                <div class="container-task">
                    @foreach($ps as $j => $pss)

                    <div class="card m-1 btn-info-laporan card-task" data-date="{{$pss->tanggal}}" data-bs-toggle="modal" data-bs-target="#modal-laporan" value="{{$pss->id_pengaduan}}" uri="{{url('getsinglepengaduan')}}">
                        <div class="container p-3">
                            <small>{{$pss->tanggal}}</small>
                            <br>
                            <label>{{Laporkuy::trunc($pss->judul_pengaduan,5)}}</label>
                            <p class="">{{Laporkuy::trunc($pss->keterangan,5)}}</p>
                            <div class="row">
                                <div class="col"><b>Bencana Alam</b></div>
                                <div class="col"><span class="badge  fs-6 {{Laporkuy::renderSpan($pss->status)}}">{{$pss->status}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>

        @endforeach
    </div>
</div>

<script>
    $(document).ready(function() {

    })

</script>




<div class="hider">
    @include("components.laporkuy.modallaporaninfo")
</div>
<div class="modal fade" id="modal-selesai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="{{route('petugas.konfirmasiselesai')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Selesai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id_pengaduan" class="id-pengaduan-field">
                    <div class="form-group">
                        <label for="">Masukan Keterangan</label>
                        <textarea name="keterangan" id="" cols="30" rows="10" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Lampiran</label>
                        <input type="file" class="form-control" required multiple name="lampiran[]">
                        @error('lampiran')
                        <span>masukan minimal 5 lampiran berupa file foto (jpeg, png, jpg)</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
            </div>
        </div>
    </form>
</div>


@push("js")
<script src="{{asset('js/laporkuy/pengaduan.js')}}"></script>
@if($errors->any())
<script>
    $(document).ready(function() {
        $(".modal-laporan").remove();
        $("#modal-selesai").modal('show');
    });

</script>
@endif
<script>
    $(document).ready(function() {
        var item = $(".card-task")

      

        function orderBy(element, orderby) {
                var card = element.children(".card-task")
            
                card.sort(function(a, b) {
                
                    var dateA = new Date($(a).data('date'))
                    var dateB = new Date($(b).data('date'))
                    
                    if(orderBy == "Terlama"){
                        return dateA > dateB ? 1 : -1;
                    }else{
                        return dateA < dateB ? 1 : -1;
                    }
               
                });


                element.empty();

                card.appendTo(element)

                console.log(card);
        
        }




        // $("#modal-selesai").modal("show");
       


        $(document).delegate(".item-status", "click", function() {
            changeStatus($(this).attr("value"), "{{url('/ubahstatuslaporan')}}");
        });

        $("#message-sender").click(function() {
            sendMessage("{{url('send-tanggapan')}}");
        });


        $(document).delegate(".btn-orderby", "click", function() {
            var container = $(this).closest(".card-main-task").children(".container-task");
    
            if ($(this).attr('state') == "Terbaru") {
                $(this).attr("state", "Terlama") 
                $(this).text( "Terlama") 
                orderBy(container, "Terbaru")
             
            }else{
                orderBy(container, "Terbaru")
                $(this).text( "Terbaru") 
                $(this).attr("state", "Terbaru");
            }
        });
    });

</script>
@endpush


@endsection
