@extends('layouts.user')

@section("content")
<div class="container">
    <div class="card container-pengaduan">
        <h3 class="m-3">Jelajahi Pengaduan</h3>
        <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            
                <div class="carousel-inner">
                    @foreach($pengaduan as $i => $p)
                    <div class="carousel-item @if($i==0) active @endif">
                        <img class="d-block w-100" src="{{$p->lampiran[0]->isi_lampiran}}" alt="First slide">
                    </div>
                    @endforeach

                </div>
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </div>
</div>

@endsection
