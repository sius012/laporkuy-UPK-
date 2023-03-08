@extends('layouts.user')

@push("css")

@endpush
@section('content')

<div class="container card p-4 container-pengaduan">
    <div class="row">
        <div class="col"><h3 class='mb-3 font-weight-bold'>Pengaduan Saya</h3></div>
        <div class="col"><div class="container d-flex">
            <button class="btn btn-primary-lk font-bold fs-4 ml-auto" data-toggle="modal" data-target="">+</button> </div></div>
    </div>
    
    <div class="card">
        <div class="card-header">
            <i class="fa fa-filter"></i> Filter
        </div>
        <div class="card-body">
            <form action="" method="get">
                <div class="row">
                    <div class="col-sm-4">
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
    @foreach($pengaduan as $i => $pn)
    @include('components.laporkuy.user.cardpengaduan')
    @endforeach

</div>

<div class="modal fade" id="modal-lampiran" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lampiran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" id="img-prev">

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
$(document).ready(function() {
    $(".btn-lampiran").click(function() {
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $("meta[name=csrf-token]").attr("content")
            },
            data: {
                id_pengaduan: $(this).val(),
                state: $(this).attr('state')
            },
            url: "{{route('pengaduan.lihatlampiran')}}",
            type: "get",
            dataType: "json",
            success: function(data) {
                let corousel = data.map(function(e, i) {
                    return `<div class="carousel-item ${i == 0 ? "active" : ""} ">
                        <img class="d-block w-100" src="${e['isi_lampiran']}" alt="First slide">
                      </div>`;
                });
                console.log(corousel);
                $("#img-prev").html(corousel);
            },
            error: function(err) {
                alert(err.responseText);
            }
        });
    })
});
</script>
@endpush