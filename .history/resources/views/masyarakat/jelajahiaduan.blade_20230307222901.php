@extends('layouts.user')

@section("content")
<div class="container">
    <div class="card container-pengaduan p-4">
        <div class="row">
            <div class="col">
                <h3 class='mb-3 font-weight-bold'>Jelajahi Aduan</h3>
            </div>
            <div class="col">
                <div class="container d-flex">
                </div>
            </div>
        </div>
        <div class="m-3">
            <p>Jelahi berbagai aduan yang telah dilaporkan sebelumnya</p>
        </div>


        @include("components.user.")

        <div class="container">
            <h6>Laporan teratas: </h6>
            @foreach($pengaduan as $i => $pn)
            @include("components.laporkuy.user.cardpengaduan")
            @endforeach
        </div>
    </div>
</div>

@endsection
