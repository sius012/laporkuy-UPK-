@extends("layouts.app")

@section("content")
<div class="container-fluid" >
    <div class="row" style="height: 100vh">
        @foreach($pengaduan as $i => $ps)
            <div class="cosl">
                <div class="card">
                @foreach($ps as $j => $pss)

                        <div class="row card">
                            <div class="col">rs</div>
                        </div>
                @endforeach
                </div>
            </div>
            
        @endforeach
    </div>
</div>
@endsection