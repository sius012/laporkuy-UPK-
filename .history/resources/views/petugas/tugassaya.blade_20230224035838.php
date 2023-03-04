@extends("layouts.app")

@section("content")
<div class="container-fluid" >
    <h3>Tugas Saya</h3>
    <div class="row" style="height: 100vh">
        @foreach($pengaduan as $i => $ps)
            <div class="col">
                <div class="card p-3" style="height: 90vh">
                    <h3>{{}}</h3>
                @foreach($ps as $j => $pss)
                        <div class="card m-1">
                            <div class="row">
                                <div class="col-4"><img src="{{$pss->lampiran[0]->isi_lampiran}}" alt="" width="80px" height="80"></div>
                                <div class="col-8">
                                    <h5>{{$pss->judul_pengaduan}}</h5>
                                </div>
                            </div>
                        </div>
                @endforeach
                </div>
            </div>
            
        @endforeach
    </div>
</div>
@endsection