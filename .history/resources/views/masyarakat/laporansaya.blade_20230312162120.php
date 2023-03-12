@extends('layouts.user')

@push("css")

@endpush
@section('content')

<div class="container card p-4 container-pengaduan">
    <div class="row">
        <div class="col"><h3 class='mb-3 font-weight-bold' style=" color:#6e21cc "><i class="fa fa-envelope-open"></i>  Pengaduan Saya</h3></div>
        <div class="col"><div class="container d-flex">
            <button class="btn btn-primary-lk font-bold fs-4 ml-auto" data-toggle="modal" data-target="#tambahpengaduan-modal">+</button> </div></div>
    </div>
    
    @include("components.laporkuy.user.filter")
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

@include('components.laporkuy.user.tambahpengaduan')

@endsection

@push('js')
<script src="{{asset('js/laporkuy/pengaduanuser.js')}}"></script>
<script>
    $(document).ready(function(){
        $(".btn-lampiran").click(function(){
            showLampiran($(this), "{{route('pengaduan.lihatlampiran')}}");
        })

        $(".btn-lampiran-akhir").click(function(){
            showLampiran($(this), "{{route('pengaduan.lihatlampiran')}}", "");
        })
    });

    
</script>
@endpush