@extends("layouts.app")

@section("content")
<div class="container-fluid" >
    <h3>Tugas Saya</h3>
    <div class="row" style="height: 100vh">
        @foreach($pengaduan as $i => $ps)
            <div class="col">
                <div class="card p-3" style="height: 90vh">
                    <label>{{ucwords   ($i)}}</label>
                @foreach($ps as $j => $pss)
                <a href="#" data-bs-toggle="modal" data-bs-target="#modal-laporan">
                        <div class="card m-1">
                            <div class="row">
                                <div class="col-4"><img src="{{$pss->lampiran[0]->isi_lampiran}}" alt="" width="80px" height="80"></div>
                                <div class="col-8">
                                    <label>{{$pss->judul_pengaduan}}</label>
                                    <p class="p-0" style="line-height: 0">{{Laporkuy::trunc($pss->keterangan,10)}}</p> 
                                    <small>{{$pss->tanggal}}</small>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                </div>
            </div>
            
        @endforeach
    </div>
</div>

@push("js")
    <script src="{{asset()}}"></script>

@endsection


@include("components.laporkuy.modallaporaninfo")
@endsection