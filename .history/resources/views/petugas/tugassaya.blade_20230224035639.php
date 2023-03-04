@extends("layouts.app")

@section("content")
<div class="container-fluid" >
    <h3>Tugas Saya</h3>
    <div class="row" style="height: 100vh">
        @foreach($pengaduan as $i => $ps)
            <div class="col">
                <div class="card p-3" style="height: 90vh">
                @foreach($ps as $j => $pss)

                        <div class="card m-1">
                            <div class="row">
                                <div class="col-4"><img src="{{$pss->lampiran[1]->isi_lampiran}}" alt="" width="80px"></div>
                                <div class="col-8">
                                    <h3></h3>
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