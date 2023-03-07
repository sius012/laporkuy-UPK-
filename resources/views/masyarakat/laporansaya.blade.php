@extends('layouts.user')

@push("css")
<style>
.wave {
    position: absolute;
    bottom: 0px;
    left: 0px;
    width: 100%;
    height: 300px;
    background-image: url("{{asset('img/wave.svg')}}");
    
}

.wave.wave1 {
    animation-name: animate1;
    animation-duration: 30s;
    -webkit-animation-iteration-count: infinite;
    z-index: 1000;
    opacity: 1;
    animation-delay: .3s;
}

.wave.wave2 {
    animation-name: animate2;
    animation-duration: 30s;
    animation-iteration-count: infinite;
   
    z-index: 999;
    opacity: 0.75;
    animation-delay: .3s;
    bottom: 30px;
}

.wave.wave3 {
    animation-name: animate3;
    animation-duration: 30s;

    z-index: 998;
    opacity: 0.5;
    animation-delay: .3s;
    bottom: 40px;
}

@keyframes animate1 {
    0% {
        background-position-x: 0px;
    }

    100% {
        background-position-x: 800px;

    }
}

@keyframes animate2 {
    0% {
        background-position-x: 0px;
    }

    100% {
        background-position-x: -2000px;

    }
}

@keyframes animate3 {
    0% {
        background-position-x: 0px;
    }

    100% {
        background-position-x: 3000px;
    }
}

body {
  
    background-color: #7703fc;
}



.container-pengaduan{
    margin-top: 40px;
    box-shadow: 0px 0px 10px -5px black;
    z-index: 1001;
    border-radius: 30px;
}


h3,h2,h1{
    color:#6e21cc;
}

label{
    color: #6e21cc;
}

.nav-link{
    color: #6e21cc;
}
</style>
@endpush
@section('content')
<div class="wave wave1">
</div>
<div class="wave wave2">
</div>
<div class="wave wave3">
</div>
<div class="container card p-4 container-pengaduan">

    <h3 class=''>Pengaduan Saya</h3>
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