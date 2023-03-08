@extends('layouts.user')

@section("content")
<div class="container">
    <div class="card container-pengaduan p-4">
        <h3 class="m-3">Jelajahi Pengaduan</h3>
        <p>Jelahi </p>
        <div class="container">
            @foreach($pengaduan as $i => $pn)
                @include("components.laporkuy.user.cardpengaduan")
            @endforeach
        </div>
    </div>
</div>

@endsection
