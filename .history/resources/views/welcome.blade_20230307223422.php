@extends('layouts.user')


@section('content')
<div class="jumbotron bg-primary-lk">
    <div class="row">
    <div class="col-md-7">
        <h1 class="display-4 pt-5 mt-5">Selamat datang di <b>Laporkuy</b></h1>
        <p class="lead">Mari jadikan layanan pengaduan masyarakat menjadi lebih baik lagi.</p>
        <hr class="my-3">
        <p>Jadikan lingkungan kita menjadi lebih baik setiap harinya.</p>
        <p class="lead">
            <a class="btn btn-white-lk btn-lg" href="#" role="button">Buat Pengaduan</a>
        </p>
    </div>
    <div class="col-md-5">
        <img src="{{asset('img/home-ilustration.svg')}}" alt="" style="width: 400px; margin: 50px">
    </div>
</div>

</div>

<section>
    <div class="container">
        <h3 class="display-6 text-center mb-4">
            Mari Buat Pengaduan
        </h3>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-5 col-carousel">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" id="image-prev">

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
                    <div class="col-sm col-form-pengaduan">
                        <form action="{{route('pengaduan.buat.user')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Jenis Pengaduan</label>
                                <select id="" class="form-control" name="id_jenis">
                                    @foreach($jenispengaduan as $i => $jp)
                                    <option value="{{$jp->id_jp}}">{{$jp->jenis}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Judul</label>
                                <input type="text" class="form-control" name="judul" required>
                            </div>
                            <div class="form-group">
                                <label for="">Lokasi Kejadian</label>
                                <input type="text" class="form-control" name="lokasi" required>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal</label>
                                <input type="datetime-local" class="form-control" name="tanggal" required>
                            </div>
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <textarea id="" cols="30" rows="7" class="form-control" name="keterangan" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Lampiran</label>
                                <input type="file" class="form-control-file" name="lampiran[]" multiple required id="lampiran" accept="image/*">
                            </div>
                            <button class="btn btn-primary-lk" type="submit" >Buat Pengaduan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push("js")
<script>
    $(document).ready(function() {
        $("#lampiran").change(function() {
            readImage(this, $("#image-prev"));
        });

        $(".col-carousel").hide();
    });

</script>
@endpush
