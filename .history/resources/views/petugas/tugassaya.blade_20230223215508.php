@extends("layouts.app")

@section("content")
<div class="container-fluid" >
    <div class="row" style="height: 100vh">
        @foreach($pengaduan as $i => $ps)
            <div class="col">
                <div class="card">
                @foreach($ps as $j => $pss)

                        <div class="card m-1">
                            <div class="row">
                                <div class="col-4"><img src="{{$pss->lampiran[1]->isi_lampiran}}" alt=""></div>
                                <div class="col-8"></div>
                            </div>
                        </div>
                @endforeach
                </div>
            </div>
            
        @endforeach
    </div>
</div>
@endsection