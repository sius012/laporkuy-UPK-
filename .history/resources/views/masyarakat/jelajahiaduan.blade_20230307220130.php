@extends('layouts.user')

@section("content")
<div class="container">
    <div class="card container-pengaduan">
        <h3 class="m-3">Jelajahi Pengaduan</h3>

        <div class="container">
            @foreach($pengaduan as $i => $value)
                
            @endforeach
        </div>
    </div>
</div>

@endsection
