@extends('layouts.user')

@section("content")
<div class="container">
    <div class="card container-pengaduan p-4">
        <div class="row">
            <div class="col"><h3 class='mb-3 font-weight-bold'>Pengaduan Saya</h3></div>
            <div class="col"><div class="container d-flex">
                <button class="btn btn-primary-lk font-bold fs-4 ml-auto" data-toggle="modal" data-target="#tambahpengaduan-modal">+</button> </div></div>
        </div>
        <div class="m-3">
            <p>Jelahi berbagai aduan yang telah dilaporkan sebelumnya</p>
        </div>

        <div class="container">
            <h6>Laporan teratas: </h6>
            @foreach($pengaduan as $i => $pn)
                @include("components.laporkuy.user.cardpengaduan")
            @endforeach
        </div>
    </div>
</div>

@endsection