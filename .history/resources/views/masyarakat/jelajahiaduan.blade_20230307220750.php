@extends('layouts.user')

@section("content")
<div class="container">
    <div class="card container-pengaduan p-4">
        <h3 class="">Jelajahi Pengaduan</h3>
        <div class="div">
            <p>Jelahi berbagai aduan yang telah dilaporkan sebelumnya</p>
        </div>

        <div class="container">
            @foreach($pengaduan as $i => $pn)
                @include("components.laporkuy.user.cardpengaduan")
            @endforeach
        </div>
    </div>
</div>

@endsection
